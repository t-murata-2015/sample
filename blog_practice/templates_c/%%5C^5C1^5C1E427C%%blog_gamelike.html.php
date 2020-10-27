<?php /* Smarty version 2.6.31, created on 2020-10-04 19:36:07
         compiled from C:/xampp/htdocs/sample/blog_practice/blog_gamelike.html */ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>記事マップ</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>

<body>


    <style>
        #fly {
            display: block;
            position: relative;
            margin: 0px auto;
            width: 20%;
            height: 40px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-size: 12px;
            text-align: center;
            color: #fff;
            background: #ee8a65;
        }

        #getback {
            display: block;
            position: fixed;
            bottom: 20px;
            left: 40%;
            width: 20%;
            height: 40px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-size: 12px;
            text-align: center;
            color: #fff;
            background: #ee8a65;
        }
        #addBlogPost {
            display: block;
            position: fixed;
            bottom: 20px;
            left: 70%;
            width: 20%;
            height: 40px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-size: 12px;
            text-align: center;
            color: #fff;
            background: #9addfb;
        }

    </style>

    <div id="map"></div>
    <br />
    <button id="fly">Fly Away<?php echo '<?php'; ?>
 echo $posts; <?php echo '?>'; ?>
</button>
    <button id="getback">Get Back</button>
    <button id="addBlogPost">Add Blog Post</button>


    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiMTNtdXJhdGEiLCJhIjoiY2s5cXcwampsMDNwazNmbXQxaWVzamE0NiJ9.wSyFabY45TKJhVRjnAStMQ';

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/13murata/ckdwlup5n1zhn19ruf3iqz6pc',
            center: [139.7673068, 35.6809591],
            zoom: 17,
            bearing: -12,
            pitch: 60,
            interactive: false
        });

        // pixels the map pans when the up or down arrow is clicked
        var deltaDistance = 350;

        // degrees the map rotates when the left or right arrow is clicked
        var deltaDegrees = 50;

        function easing(t) {
            return t * (2 - t);
        }




        var control = addEventListener('keydown', function(e) {
            e.preventDefault();
            if (e.which === 38) {
                // up
                map.panBy([0, -deltaDistance], {
                    easing: easing
                });

            } else if (e.which === 40) {

                // down
                map.panBy([0, deltaDistance], {
                    easing: easing
                });

            } else if (e.which === 37) {

                // left
                map.easeTo({
                    bearing: map.getBearing() - deltaDegrees,
                    easing: easing
                });

            } else if (e.which === 39) {

                // right
                map.easeTo({
                    bearing: map.getBearing() + deltaDegrees,
                    easing: easing
                });

            }

            true
        });



        map.on('load', function() {
            map.getCanvas().focus();

            map.getCanvas().control;
        });

        var posts = <?php echo '<?php'; ?>
 echo $posts; <?php echo '?>'; ?>
;
        
        var text = "'<h3>'.{$name[0]}.</h3><p>どの企業もリモートワークしているので、人が少ないですね。</p>'";
        console.log(posts);
        var chapters = {
            'tokyo': {
                center: [139.7673068, 35.6809591],
                content: text
            },
            'shinjuku': {
                center: [139.70025799999996, 35.690921],
                content: '<h3>新宿駅</h3><p>知らぬ間に東口と西口をつなぐ通路が通っていました。実際に通ってみるとなぜ今までできなかったのかと思うほど楽ちんでびっくりしました。</p>'

            },
            'takadanobaba': {
                center: [139.70378200000005, 35.712285],
                content: '<h3>高田馬場駅</h3><p>ラーメン屋や油そば屋がたくさんあるが、店名はそのままで運営している人が変わっている。毎週食べていたあの味がもうないと思うとかなしいですね。</p>'

            }
        };

        var popup = new mapboxgl.Popup({
                closeOnClick: false,
                closeButton: false
            })
            .setLngLat(chapters.takadanobaba.center)
            .setHTML(chapters.takadanobaba.content)
            .addTo(map);

        var popup = new mapboxgl.Popup({
                closeOnClick: false,
                closeButton: false
            })
            .setLngLat(chapters.shinjuku.center)
            .setHTML(chapters.shinjuku.content)
            .addTo(map);

        var popup = new mapboxgl.Popup({
                closeOnClick: false,
                closeButton: false
            })
            .setLngLat(chapters.tokyo.center)
            .setHTML(chapters.tokyo.content)
            .addTo(map);


        document.getElementById('fly').addEventListener('click', function() {

            var position1 = [129.339 + (145.49 - 129.339) * Math.random(), 30.591 + (45.3122 - 30.591) * Math.random()];


            // Fly to a random location
            map.flyTo({
                center: position1,
                essential: true, // this animation is considered essential with respect to prefers-reduced-motion
                zoom: 17,
                bearing: -12,
                pitch: 60
            });
        });

        document.getElementById('fly').control;





        document.getElementById('getback').addEventListener('click', function() {

            var position1 = [129.339 + (145.49 - 129.339) * Math.random(), 30.591 + (45.3122 - 30.591) * Math.random()];


            // Fly to a random location
            map.flyTo({
                center: [139.7673068, 35.6809591],
                essential: true, // this animation is considered essential with respect to prefers-reduced-motion
                zoom: 17,
                bearing: -12,
                pitch: 60
            });
        });

        document.getElementById('getback').control;

        
        document.getElementById('addBlogPost').addEventListener('click', function() {

            window.location.href = 'post.php';
        
        });
                
    </script>
</body>

</html>