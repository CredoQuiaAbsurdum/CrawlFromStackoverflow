<!DOCTYPE html>

<html>
    <head>
        <title>Android-Related Questions on Stackoverflow</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <?php
            $newest_link = "https://stackoverflow.com/questions/tagged/android?sort=newest";
            $votes_link = "https://stackoverflow.com/questions/tagged/android?sort=votes";
            //$votes_link = "https://stackoverflow.com/search?tab=votes&q=%5bandroid%5d%20created%3a7d..%20is%3aquestion";
        ?>
    </head>
    <body>
        <div class="container">
            <div>
                <header class="bg-secondary text-white py-3">
                    <div class="container"><h2>Android-Related Questions on Stackoverflow</h2></div>
                </header>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-9 newest">
                        <h3 class="text-secondary">Top 10 Newest</h3>
                        <?php
                            $html = file_get_contents($newest_link);
                            preg_match_all('/<a href="(.*)" class="question-hyperlink">(.*)<\/a>/', $html, $a);
                            $list = '';
                            echo '<div><ol>';
                            for ($x = 0; $x < 10; $x++) {
                                echo '<li><a href = "https://stackoverflow.com' . $a[1][$x] . '" target="_blank">' . $a[2][$x] . '</a></li>';
                            } 
                            echo '</ol></div>';
                        ?>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <br />
                                <p class="p-1 bg-primary text-white">Other Tags:</p>
                                <ul>
                                    <li><a target="_blank" href='https://stackoverflow.com/questions/tagged/android-layout'>android-layout</a></li>
                                    <li><a target="_blank" href='https://stackoverflow.com/questions/tagged/android-softkeyboard'>android-softkeyboard</a></li>
                                    <li><a target="_blank" href='https://stackoverflow.com/questions/tagged/aandroid-input-method'>android-input-method</a></li>
                                    <li><a target="_blank" href='https://stackoverflow.com/questions/tagged/android-edittext'>android-edittext</a></li>
                                    <li><a target="_blank" href='https://stackoverflow.com/questions/tagged/android-activity'>android-activity</a></li>
                                    <li><a target="_blank" href='https://stackoverflow.com/questions/tagged/android-emulator'>android-emulator</a></li>
                                    <li><a target="_blank" href='https://stackoverflow.com/questions/tagged/android-scripting'>android-scripting</a></li>
                                    <li><a target="_blank" href='https://stackoverflow.com/questions/tagged/android-manifest'>android-manifest</a></li>
                                </ul> 
                                                                   
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9 votes">
                        <h3  class="text-secondary">Top 10 Most Voted</h3>
                        <?php
                            $html = file_get_contents($votes_link);
                            //preg_match_all('/<a href="(.*)" data-searchsession="(.*)" title="(.*)" class="question-hyperlink">(.*)<\/a>/', $html, $a);
                            preg_match_all('/<a href="(.*)" class="question-hyperlink">(.*)<\/a>/', $html, $a);
                            $list = '';
                            echo '<div><ol>';
                            for ($x = 0; $x < 10; $x++) {
                                echo '<li><a href = "https://stackoverflow.com' . $a[1][$x] . '" target="_blank">' . $a[2][$x] . '</a></li>';
                            } 
                            echo '</ol></div>';
                        ?>
                    </div>
                </div>            
            </div>
            <div>
                <footer class="bg-secondary">
                    <div class="container"><p>&copy; This is a footer.</p></div>
                </footer>
            </div>
        </div>
    </body>
</html>