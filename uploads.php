<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <meta content="width:device-width,initial-scale:1.0" name="viewport" />
    <title>Hostel Management Information Sysyem</title>
</head>
<body bgcolor="#00FFFF">
 <div class="container" width="90%">
        <div class="row">
            <div class="col-sm-12">
    <div class="panel-heading" style="background-color: #00FFFF; border: 1px solid #ddd; width:auto>
                                            <h3 class="panel-title">
                                                Photograph:
                                            </h3>
                                        </div>
                                        <table class="table" style="margin-bottom: 0px;">
                                            <tr>
                                                <td width="50%">
                                                    <h6 class="text-danger">
                                                        <u>NOTE</u><br />
                                                        <br />
                                                        <i>*The picture must be in (.png or .jpg or .JPEG) file extention</i></h6>
                                                    <h6 class="text-danger">
                                                        <i>* The size of the picture should not exceed 120kb</i></h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="image/00000.jpg".jpg" class="img-circle" width="180px" height="180px" style="background-color: #c7c7c7;"/>
                                                </td>
                                                <td>
                                                    <input type="file" id="hiddenFile" style="display: none;" align="middle"/>
                                                    <div class="input-group" style="margin-top: 85px;" align="center">
                                                        <input name="pass_port" type="text" class="form-control disabled" id="imagePath" />
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-info" onclick="$('input[id=hiddenFile]').click()">
                                                                Select Picture... &emsp;<span class="glyphicon glyphicon-picture"></span></button></span>
                                                </td>                      
                                            </tr>
                                            <tr>
                                             <td align="center"><a href="welcome.php"><input name="Upload" type="button" class="btn" id="Upload" value="Upload" /></a></td>
                                             </tr>
                                        </table>
                                        </form>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p align="center">
                    &copy; 2019 Nigerian Prison Services</p>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $('input[id=hiddenFile]').change(function () {
            $('#imagePath').val($(this).val());

        });

        $('input[id=excelFile]').change(function () {
            $('#excelPath').val($(this).val());

        });

    </script>
</body>
</html>
