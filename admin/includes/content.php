<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row "Eigen code"-->


    <div class="row">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="page-header">Titel</h1>
                    <hr>
                    <?php

                    /*if($database->connection){
                    echo "OK, There is a connection with the database.";
                    }*/

                    /*echo "ophalen van 1 user" . "<br>";
                    $sql = "SELECT * FROM users WHERE id=1";
                    $result = $database->query($sql);
                    $user_found = mysqli_fetch_array($result);
                    echo $user_found["username"];*/

                    /*$user = new User();
                    $result = $user->find_all_users();
                    while($row = mysqli_fetch_array($result)){
                        echo $row['username'] . "<br>";
                    }*/

                    /*$result = User::find_all_users();
                    while($row = mysqli_fetch_array($result)){
                        echo $row['username'] . "<br>";
                    }*/

                    /*$result = User::find_user_by_id(1);
                    echo $result['username'] . "<br>";*/

                    /*$result = User::find_user_by_id(1);
                    $user = new User();
                    $user->id = $result['id'];
                    $user->username = $result['username'];
                    $user->password = $result['password'];
                    $user->first_name = $result['first_name'];
                    $user->last_name = $result['last_name'];
                    echo $user->id . ' ' . $user->username . ' ' . $user->password . ' ' . $user->first_name . ' ' . $user->last_name;*/

                    /*$result = User::find_user_by_id(1);
                    $user = User::instantie($result);
                    echo $user->id . ' ' . $user->username . ' ' . $user->password . ' ' . $user->first_name . ' ' . $user->last_name;*/

                    ?>

                    <?php
                    /*$users = User::find_all_users();
                        foreach($users as $user){
                            echo $user->username . "<br>";
                        }

                        echo "<br>";

                        $result = User::find_user_by_id(1);
                        echo $result->username;

                        echo "<br>";*/

                    ?>

                    <?php
                    // create methode
                    /*$user = new User();
                    $user->username = "Jason";
                    $user->password = "geheim";
                    $user->first_name = "Jason";
                    $user->last_name = "Muylle";
                    echo "hier test ik de create methode uit <br>";
                    $user->create();
                    //$user->save();*/

                    // read methode
                    /*echo "hier test ik de read methode uit <br>";
                    $user = User::find_user_by_id(2);
                    echo $user->last_name . " " . $user->first_name . "<br>";*/

                    // update methode
                    /*$user = User::find_user_by_id(1);
                    $user->last_name = "Testiekel";
                    echo "hier test ik de update methode uit";
                    //var_dump($user);
                    $user->update();
                    //$user->save();*/

                    // delete methode
                    /*echo "hier test ik de delete methode uit";
                    $user = User::find_user_by_id(3);
                    $user->delete();*/
                    ?>

                    <?php 

                        $users = User::find_all();
                        foreach ($users as $user){
                            echo $user->first_name . "<br>";
                        }

                    ?>

                </div>
            </div>
        </div>

    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->