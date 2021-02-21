<!DOCTYPE html>
<html lang="">
<head>
<title>ปันชนะ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">

        <h1><img src="images/logo4.png" alt="" ><a href="index.php">PunChaNa</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index.php">หน้าหลัก</a></li>
          <li><a href="#">ส่งโครงการ</a></li>
          <li><a href="#">รายงาน</a></li>
          <li><a href="contact.html">ติดต่อเรา</a></li>
          <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section id="pageintro" class="hoc clear">
    <div> 
      <!-- ################################################################################################ -->
      <h5 class="heading"></h5>
      <p>จะเป็นใครไม่สำคัญ ร่วมมือกันผ่านปันชนะ มาร่วมมือกันสร้างผลกระทบทางสังคมอันยิ่งใหญ่ ส่งต่อความช่วยเหลือกว้างไกลทั่วประเทศผ่านเว็บไซต์ปันชนะ</p>
      <footer><a class="btn" href="#">ร่วมบริจาค</a></footer>
      <!-- ################################################################################################ -->
    </div>
  </section>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">โครงการปันชนะ</h6>
      <p> - สุขทั้งใจทั้งผู้ให้และผู้รับ -</p>
    </div>
    <ul class="nospace group services">
      <li class="one_quarter first">
        <article><a href="child.php"><i class="fa fa-3x fa-child"></i></a>
          <h6 class="heading font-x1"><a href="#">เด็ก</a></h6>
          <p>ร่วมเป็นส่วนหนึ่งของการช่วยเหลือเด็กๆ ให้มีอยู่ในสังคมได้อย่างปลอดภัย</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="wheelchair.php"><i class="fa fa-3x fa-wheelchair"></i></a>
          <h6 class="heading font-x1"><a href="#">ผู้สูงอายุ</a></h6>
          <p>ผู้สูงอายุที่ด้อยโอกาส ได้รับการพัฒนาคุณภาพชีวิต จากชุมชนและสังคมอย่างยั่งยืน</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="animal.php"><i class="fa fa-3x fa-paw"></i></a>
          <h6 class="heading font-x1"><a href="#">สัตว์</a></h6>
          <p>เติมรัก ต่อชีวิต ปันความสุขแก่สัตว์ให้มีคุณภาพชีวิตที่ดีกว่าเดิม</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="globe.php"><i class="fa fa-3x fa-globe"></i></a>
          <h6 class="heading font-x1"><a href="#">สิ่งแวดล้อม</a></h6>
          <p>สนับสนุนให้สามารถรักษาทรัพยากรธรรมชาติและสิ่งแวดล้อมได้อย่างยั่งยืน</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">โครงการสำหรับเด็ก</h6>
      <p>ร่วมเป็นส่วนหนึ่งของการช่วยเหลือเด็กๆ ให้มีอยู่ในสังคมได้อย่างปลอดภัย</p>
    </div>

    <?php  
 $connect = mysqli_connect("localhost", "root", "", "punchana");  
 $output = '';  
 $sql = "SELECT * FROM project ORDER BY id ASC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-borderless">  
                <tr>  
                    
                     <th width="40%">โครงการ</th>  
                     <th width="30%">รูปภาพ</th>  
                     <th width="40%">รายละเอียด</th>  
                     <th width="30%"></th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                    
                     <td class="name_proj" data-id1="'.$row["id"].'" >'.$row["name_proj"].'</td>  
                     <td class="img" data-id2="'.$row["id"].'" ><img src="img/'.$row["img"].'"style="width:300px;"></td>  
                     <td class="description" data-id3="'.$row["id"].'" >'.$row["description"].'</td>  
                     <td ><button type="button" name="btn_add" data-id4="'.$row["id"].'"  class="btn btn-xs btn-success" style="width:100px;">ร่วมบริจาค</button></td> 
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
               
                <td id="name_proj"></td>  
                <td id="img"></td>  
                <td id="description"></td>  
               
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>
    
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading"><img src="images/logo4.png" alt="" >PunChaNa</h6>
      <p>จะเป็นใครไม่สำคัญ ร่วมมือกันผ่านปันชนะ</p>
      <p class="btmspace-50">มาร่วมมือกันสร้างผลกระทบทางสังคมอันยิ่งใหญ่ ส่งต่อความช่วยเหลือกว้างไกลทั่วประเทศผ่านเว็บไซต์ปันชนะ</p>
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="project.">ส่งโครงการ</a></li>
          <li><a href="#">ติดต่อเรา</a></li>
          
        </ul>
      </nav>
    </div>
    <div class="one_third">
      <h6 class="heading">ติดต่อเรา</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          มหาวิทยาลัยเทคโนโลยีสุรนารี &amp; 111,ถนนมหาวิทยาลัย, ตำบลสุรนารี อำเภอเมือง จังหวัดนครราชสีมา 30000
          </address>
        </li>
        <li><i class="fa fa-phone"></i> 0-4422-3000</li>
        <li><i class="fa fa-fax"></i> 0-4422-4070</li>
        <li><i class="fa fa-envelope-o"></i> punchana@g.sut.ac.th</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="https://www.google.com/"><i class="fa fa-google-plus"></i></a></li>
        
      </ul>
    </div>
   
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">PunChaNa</a></p>
    <p class="fl_right">PunChaNa by Groups 3</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>