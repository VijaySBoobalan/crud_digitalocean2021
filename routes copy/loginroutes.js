var connection = require('../config/db.config');
var bcrypt = require('bcrypt');

exports.register = async function(req,res){
    const password = req.body.password;
    const encryptedPassword = await bcrypt.hash(password, saltRounds)
    var users={
       "email":req.body.email,
       "password":encryptedPassword
     }
    
    connection.query('INSERT INTO users SET ?',users, function (error, results, fields) {
      if (error) {
        res.send({
          "code":400,
          "failed":"error ocurred"
        })
      } else {
        res.send({
          "code":200,
          "success":"user registered sucessfully"
            });
        }
    });
}

exports.login = async function(req,res){
    var email= req.body.email;
    var password = req.body.password;

    connection.query('SELECT * FROM users WHERE email = ?',[email], (err, result) => {
      if(err){
        res.send('email not found')
      }else if (result.length==0) {
        res.send('email not found') //this is what you are missing
      }else{
        const user = result[0];
        if(result.length >0){
          bcrypt.compare(password, user.password, (err, match) => {
            if (err) {
              res.send('password not match')
            } else {
              res.send(user)
            }
          });
        }else{
          res.send({
            "code":206,
            "success":"Email does not exits"
          });
        }
      }
    })

    // connection.query('SELECT * FROM users WHERE email = ?',[email], async function (error, results, fields) {
    //     // res.send(results);
    //     if (error) {
    //         res.send({
    //             "code":400,
    //             "failed":"error ocurred"
    //         })
    //     }else{
    //         // if(results.length >0){
    //         //     const comparision = await bcrypt.compare(password, results[0].password)
    //         //     res.send(password);
    //         //     // if(comparision){
    //         //     //     res.send({
    //         //     //         "code":200,
    //         //     //         "success":"login sucessfull"
    //         //     //     })
    //         //     // }
    //         //     // else{
    //         //     //     res.send({
    //         //     //         "code":204,
    //         //     //         "success":"Email and password does not match"
    //         //     //     })
    //         //     // }
    //         // }
    //         // else{
    //         //     res.send({
    //         //         "code":206,
    //         //         "success":"Email does not exits"
    //         //         });
    //         // }
    //     }
    // });
}