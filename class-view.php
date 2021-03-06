<?php
require_once 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Picture learner</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sunday School Database">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bulma.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="normalize.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="main.css"> -->
    <style type="text/css">    
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="container"> 
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                  <h1 id="logo" class="title">Sunday School Database</h1>
                </a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                   <!-- navbar items -->
                </div>
                <div class="navbar-end">
                    <!-- navbar items -->
                    <a class="navbar-item">
                    View classes
                    </a>
                    <a class="navbar-item">
                        New Student
                    </a>
                    <a class="navbar-item">
                        admin
                    </a>
                    <a class="navbar-item">
                        Logout
                    </a>
                </div>
            </div>
        </div>

    </nav>
    <main>
        <section class="section">
            <div class="container">
                <h2 class="title">Class: PP1 and PP2</h2>
                <!-- Tab to switch between card view and list view -->
                <div class="tabs is-centered is-medium">
                  <ul>
                    <li class="is-active"><a>List View</a></li>
                    <li><a>Card View</a></li>
                  </ul>
                </div>
                <!-- End of Tab to switch between card view and list view -->
               
                <!-- card view-->

                <?php

                echo getData2();

                ?>
                <!-- Seond level -->
                <div class="tile is-ancestor">
                    <div class="tile">
                      <div class="tile is-parent">
                        <article class="tile is-child notification is-primary">
                          <p class="title">Vertical...</p>
                          <p class="subtitle">Top tile</p>
                        </article>
                      </div>
                    </div>
                    <div class="tile is-parent">
                      <article class="tile is-child notification is-danger">
                        <p class="title">Wide tile</p>
                        <p class="subtitle">Aligned with the right tile</p>
                        <div class="content">
                          <!-- Content -->
                        </div>
                      </article>
                    </div>
                  <div class="tile is-parent">
                    <article class="tile is-child notification is-success">
                      <div class="content">
                        <p class="title">Tall tile</p>
                        <p class="subtitle">With even more content</p>
                        <div class="content">
                          <!-- Content -->
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="tile is-parent">
                    <article class="tile is-child notification is-success">
                      <div class="content">
                        <p class="title">Tall tile</p>
                        <p class="subtitle">With even more content</p>
                        <div class="content">
                          <!-- Content -->
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <!-- End of Seond level -->
                <!-- End of card view -->


                <!-- List view -->
                <table class="table is-fullwidth is-striped is-bordered">
  <thead>
    <tr>
      <th><abbr title="Position">Pos</abbr></th>
      <th>Name</th>
      <th>Phone 1:</th>
      <th>Phone 2:</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <<th><abbr title="Position">Pos</abbr></th>
      <th>Name</th>
      <th>Phone 1:</th>
      <th>Phone 2:</th>
    </tr>
  </tfoot>
  <tbody>

  <?php
  echo getData()
  ?>

  </tbody>
</table>

                <!-- End of list view  -->
                











                <!-- Start of card -->
                <!-- <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="https://versions.bulma.io/0.7.0/images/placeholders/1280x960.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                    <div class="content">
                        <p class="title is-4">John Smith</p>
                        <p class="is-6">0711111111</p>
                        <p class="is-6">0711111112</p>
                    </div>
                    </div>
                  </div>
                </div> -->
                <!-- End of card -->

            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <!-- <div class="tile is-child is-3">
                    <div class="card">
                        <img src="user.png">
                        <div class="card-text">
                            <h4>
                                <b>Jane Mshamba</b>
                            </h4>
                            <p>
                                Line 1: 0700123456
                                Line 2: 0799123456
                            </p>
                        </div>
                    </div>
                  </div>
                  <div class="tile is-child is-3">
                    <div class="card">
                        <img src="user.png">
                        <div class="card-text">
                            <h4>
                                <b>Jane Mshamba</b>
                            </h4>
                            <p>
                                Line 1: 0700123456
                                Line 2: 0799123456
                            </p>
                        </div>
                    </div>
                  </div>
                    <div class="tile is-child is-3">
                    <div class="card">
                        <img src="user.png">
                        <div class="card-text">
                            <h4>
                                <b>Jane Mshamba</b>
                            </h4>
                            <p>
                                Line 1: 0700123456
                                Line 2: 0799123456
                            </p>
                        </div>
                    </div>
                  </div>
                    <div class="tile is-child is-3">
                    <div class="card">
                        <img src="user.png">
                        <div class="card-text">
                            <h4>
                                <b>Jane Mshamba</b>
                            </h4>
                            <p>
                                Line 1: 0700123456
                                Line 2: 0799123456
                            </p>
                        </div>
                    </div>
                  </div>
              </div>
 -->
            <!-- <div class="tile is-ancestor">
            <div class="tile is-vertical is-1">
                <div class="tile">
                    <div class="tile is-parent is-4">
                        <article class="tile is-child notification is-primary">
                            <p class="title">Vertical...</p>
                            <p class="subtitle">Top tile</p>
                        </article>
                        <article class="tile is-child notification is-warning">
                            <p class="title">...tiles</p>
                            <p class="subtitle">Bottom tile</p>
                        </article>
                        <article class="tile is-child notification is-primary">
                            <p class="title">Vertical...</p>
                            <p class="subtitle">Top tile</p>
                        </article>
                        <article class="tile is-child notification is-warning">
                            <p class="title">...tiles</p>
                            <p class="subtitle">Bottom tile</p>
                        </article>
                    </div>
                </div>
            </div> -->
        </div>
    </main>

    <!-- <div class="full-page">
        <div class="left-panel">
        </div>
        <div class="middle-panel">     -->
            <!-- Start of Navigation bar -->
            <!-- <div class="menu-bar">
                <h1 id="logo" class="title">
                    Sunday School Database
                </h1>
                <div class="menu-items">
                    <a href="/add-student.html">
                        New Student
                    </a>
                    <a>
                        Edit Student
                    </a>
                    <a>
                        Admin Login
                    </a>
                </div>
            </div> -->
            <!-- End of Navigation bar -->

            <!-- <div id="page-heading">
                <h2 id="page-title">
                    New Student
                </h2>
            </div>
            <div class="tab">
                <a href="#">
                    <p class="tab-heading" id="card">
                        <b>
                            Card View
                        </b>
                    </p>
                </a>
                <a href="#">
                    <p class="tab-heading" id="list">
                        <b>
                            List View
                        </b>
                    </p>
                </a>
            </div>
            <div class="card-view">
                <div class="card">
                    <img src="user.png">
                    <div class="card-text">
                        <h4>
                            <b>Jane Mshamba</b>
                        </h4>
                        <p>
                            Line 1: 0700123456
                            Line 2: 0799123456
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="user.png">
                    <div class="card-text">
                        <h4>
                            <b>Jane Mshamba</b>
                        </h4>
                        <p>
                            Line 1: 0700123456
                            Line 2: 0799123456
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="user.png">
                    <div class="card-text">
                        <h4>
                            <b>Jane Mshamba</b>
                        </h4>
                        <p>
                            Line 1: 0700123456
                            Line 2: 0799123456
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-panel">
         </div> -->
</body>
</html>