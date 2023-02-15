<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel Rest-API

Laravel Rest-API is a server side web aplication with laravel framework, hopely can be access and usable to any aplication.

## Users API URL

**GET All Users data**
GET https://yourdomain/users

_example: GET https://laravel-rest-api.com/users_

**GET user data by Id**
GET https://yourdomain/users/{:id}

_example: GET https://laravel-rest-api.com/users/1_

**POST user into database**
POST https://yourdomain/users/

HEADER {
accept :aplication/json
Content-Type :aplication/json
{
"":""
}
}

_example: POST https://laravel-rest-api.com/users_

**Update Users Data**
PUT https://yourdomain/users/{:id}

HEADER {
accept :aplication/json
Content-Type :aplication/json
}

_example: PUT https://laravel-rest-api.com/users_

**Delete User Data**
DELETE https://yourdomain/users/{:id}

_example: DELETE https://laravel-rest-api.com/users/1_
