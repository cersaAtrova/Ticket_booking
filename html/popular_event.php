
<section class="ui container w-100 pb-5">
    <div class="ui w-75 pt-5 m-auto text-center">
    <h1> <i class="gem outline icon" style="color: #007bff;"></i>Popular places</h1> <a class="ml-3" href="tour_list.php">View all places</a>
            <div class="ui container-fluid">
            <div class="ui mt-5 row">
                <?php
                foreach (popular_event() as $e) {
                    //position 0 (Date)
                    //position 1 (Price)
                    //position 2 (starting point)
                    //position 3 (time)
                    //position 4 (image)
                    //position 5 (title)
                    $show = <<<print
                        <div class="col">
                        <a href="tour_details.php?title={$e[6]}" style="display: block">
                        <div class="ui  image ">
                        <div class="ui blue ribbon label z-index-1000 mt-1">
                                Popular
                            </div>
                            <div class="ui card">
                                <div class="content"></div>
                                <div class="image">
                                    <img src="{$e[4]}">
                                </div>
                                <div class="content">
                                    <span class="right floated">
                                        <i class="euro icon"></i>
                                        {$e[1]}</span>

                                    <span class="left floated">
                                    {$e[5]}                                   
                                    </span>

                                </div>
                                <div class="extra content ">
                                    <div class="ui large  transparent left icon input">
                                    <span class="left floated">
                                          Starting point: {$e[2]}                                   
                                      </span>
                                    <span class="right floated">
                                    Date: {$e[0]} Time: {$e[3]}</span>

                                     
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
print;
                    echo $show;
                }
                ?>


            </div>
        </div>
    </div>
</section>