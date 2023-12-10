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
$new = "addNew";

# routes
$routes = [
    # home route
    "/" => "$homeController@$display",
    # user routes
    "/user" => "$userController@$displayAll",
    "/user/signin" => "$userController@authenticate",
    "/user/signout" => "$userController@logout",
    "/user/signup" => "$userController@register",
    "/user/{id}" => "$userController@$display",
    "/user/del/{id}" => "$userController@$delete",
    "/user/edit/{id}" => "$userController@$edit",
    # post routes
    "/post" => "$postController@$displayAll",
    "/post/new" => "$postController@$new",
    "/post/{id}" => "$postController@$display",
    "/post/del/{id}" => "$postController@$delete",
    "/post/edit/{id}" => "$postController@$edit",
    # comment routes
    "/post/{id}/comment" => "$commentController@$displayAll",
    "/post/{id}/comment/new" => "$commentController@$new",
    "/post/{id}/comment/{id}" => "$commentController@$display",
    "/post/{id}/comment/del/{id}" => "$commentController@$delete",
    "/post/{id}/comment/edit/{id}" => "$commentController@$edit"
];