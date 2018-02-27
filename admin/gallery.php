

    <?php

	if(count($products)>0) {
		

			?>
        <ul id="aspect">
            <li class="gallery2">
                <a class="open-product" href="" ng-click="checkdata(<?php echo $pro['userid']; ?>)">
                    <img src="uploads/<?php echo $productPhoto; ?>" />
                </a>
            </li>

        </ul>

        <?php

	}
	else
	{
		?>
        <h2 style="margin: 30px;">No image available!</h2>

        <?php
	}
			?>






        <script type="text/javascript">
            var ajaxExample = angular.module('myApp', ['ui.bootstrap']);



            ajaxExample.controller('myCtrl', function($scope, $http) {
                $scope.users;
                $scope.title;
                $scope.desc;

                $scope.checkdata = function(id) {
                    $http({

                        method: 'POST',
                        url: 'imagedata.php',
                        data: {
                            recordId: id
                        }
                    }).then(function(response) {

                        // on success
                        $scope.users = response.data;
                        $scope.title = response.data.title;
                        $scope.desc = response.data.desc;
                        $scope.id = response.data.pid;
                        $scope.imgt = response.data.img;

                        console.log(response.data);

                        ajaxExample.updateSlidesSize()

                        $scope.myInterval = 3000;
                        $scope.noWrapSlides = false;
                        $scope.activeSlide = 0;



                    }, function(response) {

                        // on error
                        console.log(response.data, response.status);

                    });
                };


            });

        </script>

        <div id="product-popup" class="overlay-popup">
            <div class="overflow">
                <div class="table-view">
                    <div class="cell-view">
                        <div class="close-layer"></div>
                        <div class="popup-container">

                            <div class="row">
                                <div class="col-sm-6 information-entry">
                                    <div class="product-preview-box">

                                        <div>
                                            <uib-carousel interval="2000" active="0">
                                                <uib-slide ng-repeat="slide in imgt" index="$index">
                                                    <img ng-src="uploads/{{slide}}" style="margin:auto;">

                                                </uib-slide>
                                            </uib-carousel>
                                        </div>

                                    </div>



                                </div>
                                <div class="col-sm-6 information-entry">
                                    <div class="product-detail-box">
                                        <h1 class="product-title">
                                            <!--                                    title-->
                                            {{title}}
                                        </h1>


                                        <div class="product-description detail-info-entry">
                                            <!--                                    description-->
                                            <p> {{desc}}</p>

                                        </div>

                                        <div class="detail-info-entry">
                                            <a class="button style-10" href="update.php?id={{id}}" style="text-decoration: none;margin:10px;">Update</a>
                                            <a class="button style-10" href="delete.php?id={{id}}" style="text-decoration: none;margin:10px">Delete</a>

                                            <div class="clear"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="close-popup"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
