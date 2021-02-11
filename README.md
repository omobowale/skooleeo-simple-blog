## About
This application called SimpleBlog is built in Laravel - a very powerful framework of PHP. 
It allows users to create a simple blog posts which contain a title, content and an image to describe the post.
Because the application is built using a framework, only a few files are created and edited.


## Functionalities
Users can register with this application
Users can login and logout
Users can create a post
Users can view a post
Users can also keep track of the number of registered users alike

## Database
In order to ensure that user details and posts are saved, the application uses pgsql for it's database.
A few tables are created:
i. users - table to store user details such as name, email, password, date created e.t.c
ii. posts - table to store user's posts which have a title, content and an image.
iii. other tables are also automatically created.

## Deployment
To make the application available on the internet, it has been deployed using heroku.
Link is at https://skooleeo-simple-blog.herokuapp.com
