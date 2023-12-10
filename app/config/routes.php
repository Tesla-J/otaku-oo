<?php

# controllers' names
$homeController = "HomeController";
$userController = "UserController";
$postController = "PostController";
$commentController = "CommentController";

# common methods
$displayAll = "displayAll";
$display = "display";
$edit = "edit";
$delete = "delete";

# routes
$routes = [
    # home route
    "/" => "$homeController@$diplay",
    # user routes
    "/user" => "$userController@$diplayAll",
    "/user/{id}" => "$userController@$display",
    "/user/del/{id}" => "$userController@$delete",
    "/user/edit/{id}" => "$userController@$edit",
    # post routes
    "/post" => "$postController@$displayAll",
    "/post/{id}" => "$postController@$display",
    "/post/del/{id}" => "$postController@$delete",
    "/post/edit/{id}" => "$postController@$edit",
    # comment routes
    "/post/{id}/comment" => "$commnetController@$displayAll",
    "/post/{id}/comment/{id}" => "$commentController@$display",
    "/post/{id}/comment/del/{id}" => "$commentController@$delete",
    "/post/{id}/comment/edit/{id}" => "$commentController@$edit"
];