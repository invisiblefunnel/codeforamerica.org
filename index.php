<?php
    include_once('_inc/functions.php');

    // Build out URI to reload from form dropdown
    $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    
    if (isset($_POST['uri']) && isset($_POST['section'])) {
        $pageURL .= $_POST[uri].$_POST[section];
        header("Location: $pageURL");
    }
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8">
    <title>Code for America Website Style Guide</title>
    <link rel="stylesheet" href="style/css/main.css">
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body class="xx">

<?php if(isset($_GET["url"])) : ?>
<?php  include($patternsPath.$_GET["url"]) ?>
<?php else : ?>

<div class="xx-sidebar">
    <a class="xx-cfa-logo" href="/">
        <img src="images/logo-coloured.png" />
    </a>
    <ol class="xx-nav" role="navigation">
        <?php displayList($patternsPath); ?>
    </ol>
    <a class="xx-hallmark" href="http://clearleft.com/" title="Crafted by Clearleft in Brighton">Crafted by Clearleft in Brighton, UK</a>
 </div>


<div class="xx-container">
    
    <h1>Website Style Guide</h1>

    <form action="" method="post" id="pattern">
        <select name="section" id="pattern-select" class="nav-section-select">
            <option value="">Jump to&#8230;</option>
            <?php displayOptions($patternsPath); ?>
        </select>
        <input type="hidden" name="uri" value="<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">
        <button type="submit" id="pattern-submit">Go</button>
    </form>

    <main role="main">
        
        <h2>Primary Colors</h2>
        
        <p>For a background color: @include background-color($color-corporate-red, 0.1);</p>
        
        <p>For a foreground color: @include color($color-corporate-red, 0.1);</p>
        
        <ul class="list-no-bullets">
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #cf1b41;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Corporate Red</strong></li>
                    <li>rgb(204,39,62)</li>
                    <li>#cf1b41</li>
                    <li>$color-corporate-red</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #399fd3;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Corporate Blue</strong></li>
                    <li>rgb(63,158,216)</li>
                    <li>#399fd3</li>
                    <li>$color-corporate-blue</li>
                </ul>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #6D6E71;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Corporate Grey</strong></li>
                    <li>rgb(109, 110, 113)</li>
                    <li>#6D6E71</li>
                    <li>$color-corporate-grey</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #000;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Corporate Black</strong></li>
                    <li>rgb(0, 0, 0)</li>
                    <li>#000000</li>
                    <li>$color-corporate-black</li>
                </ul>
            </li>
        </ul>
        
        <h2>Secondary Colors</h2>
        
        <ul class="list-no-bullets">
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #2f3d4a;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Dark Blue</strong></li>
                    <li>rgb(47, 61, 74)</li>
                    <li>#2f3d4a</li>
                    <li>$color-dark-blue</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #7ab5d6;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Light Blue</strong></li>
                    <li>rgb(122,181,214)</li>
                    <li>#7ab5d6</li>
                    <li>$color-light-blue</li>
                </ul>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #444444;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Dark Grey</strong></li>
                    <li>rgb(68, 68, 68)</li>
                    <li>#444444</li>
                    <li>$color-dark-grey</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #999595;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Medium Grey</strong></li>
                    <li>rgb(153, 149, 149)</li>
                    <li>#999595</li>
                    <li>$color-medium-grey</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #e5e5e5;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Light Grey</strong></li>
                    <li>rgb(229, 229, 229)</li>
                    <li>#e5e5e5</li>
                    <li>$color-light-grey</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #e87d2b;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Orange</strong></li>
                    <li>rgb(232, 125, 43)</li>
                    <li>#e87d2b</li>
                    <li>$color-orange</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #69579C;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Purple</strong></li>
                    <li>rgb(105, 87, 156)</li>
                    <li>#69579C</li>
                    <li>$color-purple</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #00a175;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Teal</strong></li>
                    <li>rgb(0, 161, 117)</li>
                    <li>#00a175</li>
                    <li>$color-teal</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #4298bb;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Medium Blue</strong></li>
                    <li>rgb(66, 152, 187)</li>
                    <li>#4298bb</li>
                    <li>$color-medium-blue</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #fedd44;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Yellow</strong></li>
                    <li>rgb(254, 221, 68)</li>
                    <li>#fedd44</li>
                    <li>$color-yellow</li>
                </ul>
            </li>
        </ul>
        
        <?php displayPatterns($patternsPath); ?>
    </main><!--@main-->
    <?php endif; ?>

</div>
</body>
<script>
    (function (document, undefined) {
        // Add js class to body
        document.getElementsByTagName('body')[0].className += ' js';

        // Pattern selector
        document.getElementById('pattern-submit').style.display = 'none';
        document.getElementById('pattern-select').onchange = function() {
            //document.location=this.options[this.selectedIndex].value;
            var val = this.value;
            if (val !== "") {
                window.location = val;
            }
        }
    })(document);
</script>
</html>