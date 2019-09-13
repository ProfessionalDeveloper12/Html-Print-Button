<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print Html Table</title>
  <meta name="description" content="Html Print Page">
  <meta name="keywords" content="html print, print html, print html table, website print">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <a class="navbar-brand" href="#"><span class="logo">My Printer</span></a>
            </div>
           </div>
        </div>
      </nav>
    </div>
  </section>
  <!--/ banner-->

  <!--table-->
  <section id="data-table" class="section-padding">
    <div class="container">
      <div class="row">
          <div class="col text-center ">
              <button class="btn-show-table btn-lg">Show Table</button>
          </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="table-responsive">

          </div>
        </div>
      </div>
      <div class="row">
          <div class="col text-center">
              <button class="btn-print btn-lg" onclick = "window.print(); return false;">Print Table</button>
          </div>
      </div>
    </div>
  </section>
  <!--/ table-->

  <!--footer-->
  <footer id="footer">
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright 2019. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
