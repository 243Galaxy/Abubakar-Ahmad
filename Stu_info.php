<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body background="images/bg.jpg">

    <div class="container">
        <div class="row"> 
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3>
                    </div>
                    <div class="panel-body">
                        <form action="registerphp.php" method="post">
                            <div class="row">
                               <div class="col-lg-4">
                                <div class="form-group">
                                  <label for="RegNo">Registration No.: <span style="color:#F00">*</span></label>
                                  <input type="RegNo" name="RegNo" id="" class="form-control" required>
                                </div>
                                </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="Fname">First Name:</label>
                              <input type="Fname" name="Fname" id="" class="form-control">
                            </div>
                            </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                              <label for="oname">Other Name:</label>
                              <input type="oname" name="oname" id="" class="form-control">
                             </div>
                             </div>
                             <div class="col-lg-4">
                                <div class="form-group">
                                  <label for="gender">Gender: <span style="color:#F00">*</span></label>
                          <select class="form-control" name="gender" required>
                              <option hidden="hidden">select gender</option>
                              <option>Male</option>
                              <option>Female</option>
                          </select>
                                </div>
                                </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="mail">E-mail: <span style="color:#F00">*</span></label>
                              <input type="mail" name="mail" id="" class="form-control" required>
                            </div>
                            </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                              <label for="pw">Password: <span style="color:#F00">*</span></label>
                              <input type="pw" name="pw" id="" class="form-control" required>
                             </div>
                             </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                             <label for="level">Level :</label>
                              <input type="level" name="level" id="" class="form-control"> 
                            </div>
                            </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                               <label for="dept">Department</label>
                          <select class="form-control" name="dept">
                              <option hidden="hidden">select department</option>
                              <option>Mathematics</option>
                              <option>physics</option>
                              <option>chemistry</option>
                              <option>Engineering</option>
                          </select>
                             </div>
                             </div>
                               <div class="col-lg-4">
                                <div class="form-group">
                                   <label for="Course">Course:</label>
                                  <select class="form-control" name="Course">
                                     <option hidden="hidden">select course</option>
                                     <option>Computer Science</option>
                                     <option>geology</option>
                                     <option>statistics</option>
                                  </select>
                                </div>
                                </div>
                                <div class="col-lg-4">
                        <div class="form-group">
                               <label for="Session">Session</label>
                          <select class="form-control" name="Session">
                              <option hidden="hidden">select Session</option>
                              <option>2018/2019</option>
                              <option>2019/2020</option>
                            </select>
                            </div>
                            </div>
                            <div class="col-lg-4">
                        <div class="form-group">
                               <label for="Session">Hostel</label>
                          <select class="form-control" name="Hostel">
                              <option hidden="hidden">select Hostel</option>
                              <option>Block A</option>
                              <option>Block B</option>
                                <option>Block C</option>
                                <option>Block D</option>
                            </select>
                            </div>
                            </div>
                            </div>
                            <div><p><b>Note:<br></b>
                            The fields with  <span style="color:#F00">*</span>  are required before sign up.
                            </p></div>
                          <div class="col-lg-4">
               <div class="form-group" align="center">
                      <button type="submit" name="save" class="btn btn-primary btn-block">Save</button>
                  </div>
                               </div>
              </form>
</body>
</html>