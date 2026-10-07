<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale 1.0">
    <meta name="description" content="Student Management System">
    <meta name="keywords" content="Student, Management, System">
    <meta name="author" content="bimyna">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Student Management</title>
    <style>
      body{
        background-color:#eee;
      }
      #header{
        position:fixed;
        top:0;
        margin:0;
        width:100%;
        background-color:#fff;
        padding:6px;
        display:flex;
        justify-content:space-between;
        align-items:center;
      }
      .search-btn input{
        background-color:#eee;
        color:#444;
        padding:8px;
        width:140%;
        border-radius:12px;
        border:none;
      }
      .search-btn input::placeholder{
        color:#aaa;
        padding:3px;
      }
      .header-avatar{
        width:40px;
        height:40px;
        border-radius:50%;
        background-color:#aaa;
        background-image:url('pics/icon.jpg');

      }
    </style>
</head>
<body>
    <header id="header">
        <div class="search-btn">
            <input type="text" name="search" id="search" placeholder="🔍 Search students, courses or anything..">
        </div>
        <p><i class="fa-solid fa-bell" style="color:#000;"></i></p>
        <div class="header-avatar"><div>
        <div class="adm"></div>
      </header>
</body>
</html>