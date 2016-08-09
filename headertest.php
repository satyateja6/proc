<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Header</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
 
  <style>
 $content-width: 1000px;
$breakpoint: 800px;
$nav-height: 70px;
$nav-background: #262626;
$nav-font-color: #ffffff;
$link-hover-color: #2581DC;

nav {
  float: right;
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
    li {
      float: left;
      position: relative;
      a {
        display: block;
        padding: 0 20px;
        line-height: $nav-height;
        background: $nav-background;
        color: $nav-font-color;
        text-decoration: none;
        &:hover {
          background: $link-hover-color;
          color: $nav-font-color;
        }
        &:not(:only-child):after {
        padding-left: 4px;
        content: ' ▾';
        } 
      }
      ul li {
        min-width: 190px;
        & a {
          padding: 15px;
          line-height: 20px;
          z-index: 1;
        }
      }
    }
  }
}

.nav-dropdown {
  position: absolute;
  display: none;
  z-index: 1;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}
.nav-mobile {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  background: $nav-background;
  height: $nav-height;
  width: $nav-height;
}

#nav-toggle {
  position: absolute;
  left: 18px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
  span,
  span:before,
  span:after {
    cursor: pointer;
    border-radius: 1px;
    height: 5px;
    width: 35px;
    background: $nav-font-color;
    position: absolute;
    display: block;
    content: '';
    transition: all 300ms ease-in-out;
  }
  span:before {
    top: -10px;
  }
  span:after {
    bottom: -10px;
  }
  &.active span {
    background-color: transparent;
    &:before,
    &:after {
      top: 0;
    }
    &:before {
      transform: rotate(45deg);
    }
    &:after {
      transform: rotate(-45deg);
    }
  }
}

@media only screen and (max-width: $breakpoint) {
  .nav-mobile {
    display: block;
  }
   nav {
    width: 100%;
    padding: $nav-height 0 15px;
    ul {
      display: none;
      li {
        float: none;
         a {
          padding: 15px;
          line-height: 20px;
        }
        ul li a {
          padding-left: 30px;
        }
      }
    }
  }
  
 .nav-dropdown {
   position: static;
  }
}

@media screen and (min-width: $breakpoint) {
  .nav-list {
    display: block !important;
  }
}

.navigation {
  height: $nav-height;
  background: $nav-background;
}

.nav-container {
  max-width: $content-width;
  margin: 0 auto;
}

.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: $nav-height;
  text-transform: uppercase;
  font-size: 1.4em;
  a,
  a:visited {
    color: $nav-font-color;
    text-decoration: none;
  }
}
  </style>
  <body>
  <div class="panel panel-default" style="margin-top: 5px;">
  <nav class="navbar navbar-default">
  <ul class="nav navbar-nav">
  <li><a href="#">Phone: 630-566-8780</a></li>
  <li><a href="#">Email: info@itpeoplenetwork.com</a></li>
  <li><a href="#">Address: 2800 Beverly dr,Aurora ,IL , 60502</a></li>
  </ul>
  </nav>
  </div>
 <section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!">Logo</a>
    </div>
    <nav>
      <div class="nav-mobile">
        <a id="nav-toggle" href="#!"><span></span></a>
      </div>
      <ul class="nav-list">
        <li>
          <a href="#!">Home</a>
        </li>
        <li>
          <a href="#!">About</a>
        </li>
        <li>
          <a href="#!">Services</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Web Design</a>
            </li>
            <li>
              <a href="#!">Web Development</a>
            </li>
            <li>
              <a href="#!">Graphic Design</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">Pricing</a>
        </li>
        <li>
          <a href="#!">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</section>
</body>
</html>
<script>
(function($) {
  $(function() {
    $('nav ul li > a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
  });
  document.querySelector('#nav-toggle').addEventListener('click', function() {
    this.classList.toggle('active');
  });
  $('#nav-toggle').click(function() {
    $('nav ul').toggle();
  });
})(jQuery);
</script>