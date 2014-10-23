<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <script src="js/jquery-1.11.1/jquery-1.11.1.js"></script>
    <script src="js/jquery-1.11.1/jquery-ui.js"></script>
    <script src="js/script.js"></script>
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li class="logo"><a href="#">Logo</a></li>
          <li><a href="#">File</a>
            <ul>
              <li><a href="#">New Folder</a></li>
              <li><a href="#">Open</a></li>
              <li><a href="#">Print</a></li>
              <li><a href="#">Close Window</a></li>
              <li><a href="#">Find</a></li>
            </ul>
          </li>
          <li><a href="#">Edit</a>
            <ul>
              <li><a href="#">Undo</a></li>
              <li><a href="#">Cut</a></li>
              <li><a href="#">Copy</a></li>
              <li><a href="#">Paste</a></li>
              <li><a href="#">Clear</a></li>
              <li><a href="#">Select All</a></li>
            </ul>
          </li>
          <li><a href="#">View</a>
            <ul>
              <li><a href="#">by Small Icon</a></li>
              <li><a href="#">by Icon</a></li>
              <li><a href="#">by Name</a></li>
              <li><a href="#">by Size</a></li>
              <li><a href="#">by Kind</a></li>
              <li><a href="#">by Label</a></li>
              <li><a href="#">by Date</a></li>
            </ul>
          </li>
          <li><a href="#">Label</a>
            <ul>
              <li><a href="#">None</a></li>
              <li><a href="#">Essential</a></li>
              <li><a href="#">Hot</a></li>
              <li><a href="#">In Progress</a></li>
              <li><a href="#">Cool</a></li>
              <li><a href="#">Personal</a></li>
              <li><a href="#">Project 1</a></li>
              <li><a href="#">Project 2</a></li>
            </ul>
          </li>
          <li><a href="#">Special</a>
            <ul>
              <li><a href="#">Clean up Window</a></li>
              <li><a href="#">Empty Trash...</a></li>
              <li><a href="#">Eject Disk</a></li>
              <li><a href="#">Erase Disk</a></li>
              <li><a href="#">Restart</a></li>
              <li><a href="#">Shutdown</a></li>
            </ul>
          </li>
        </ul>
        <ul class="right">
          <li class="clock"><time><a href="#">4:20 PM</a></time></li>
          <li class="about"><a href="#">?</a>
            <ul>
              <li><a href="#">Show Balloons</a></li>
            </ul>
          </li>
          <li class="winselector"><a href="#">Sel</a>
            <ul>
              <li><a href="#">Finder</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <main>
      <div id="wrapper">
      <section id="window_about_this" class="window ui-widget-content" aria-labelledby="about_this">
        <h3 id="header_about_this">About this website</h3>
      </section>
      <section id="window_system_folder" class="window ui-widget-content" aria-labelledby="system_folder">
        <h3 id="header_system_folder">System Folder</h3>
      </section>
      </div>
    </main>
  </body>
</html>