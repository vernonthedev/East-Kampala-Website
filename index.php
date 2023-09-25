<?php
include'config.php';
?>

<!doctype html>
<html lang="en">
<title>East Kampala SDA Church</title>
<head>
<?php include'style.php'; ?>
</head>

<body>

<?php include'head.php'; ?>
<?php include'preloader.php'; ?>

    <div class="slider_area">

        <div class="banner_slider owl-carousel owl-theme" data-indicators="true">
<?php
$view_banners = "select * from banner_slider";
$run_query = mysqli_query($conn, $view_banners);
if($run_query-> num_rows > 0){

while($row = mysqli_fetch_assoc($run_query)) {
?>
            <div class="item">
                <img src="admin/banner/<?php echo $row['banner_img'];?>" alt="main_banner1" class="img img-fluid" >
                <div class="index_bannerContent" style="border-radius: 10px;">
                    <h3><?php echo $row['banner_title'];?></h3>
                    <p><?php echo $row['banner_content'];?></p>
                </div>
            </div>

<?php
}
}
?>

        </div>
    </div>


<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1" >East Kampala A Family Of God</h1>
            <p class="lead-sm" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet doloribus explicabo omnis eaque quos harum officia consectetur placeat, fugit repellat exercitationem. Suscipit beatae eligendi et placeat fuga dolor enim mollitia quidem, vero impedit voluptate quasi aut, sunt ratione repellendus quisquam fugiat debitis vitae qui ex laborum iste dicta rerum eius? Nam vitae voluptates blanditiis eius sapiente aliquam quia dolores consequuntur</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="about.php" class="btn btn-sm  bg-gradient-primary btn-lg px-4 me-md-2 fw-bold">More About Us <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></a>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-dark shadow-dark mt-md-0 mt-5">
            <div class="front front-background" style="background-image: url(assets/img/bible.png); background-size: cover;">
              <div class="card-body py-7 text-center">
              <img src="assets/img/pulpit.png" class="img img-fluid" alt="image" width="60px" height="50%" style="margin:auto;">
                <h3 class="text-white">The Faith <br> We standby.</h3>
                <p class="text-white opacity-8">There is love and fellowship in the house of the Lord</p>
              </div>
            </div>
            <div class="back back-background" style="background-image: url(assets/img/facility/call-assistance.png); background-size: cover;">
              <div class="card-body pt-7 text-center">
                <h3 class="text-white">Talk to Us</h3>
                <p class="text-white opacity-8"> God will always make a way.</p>
                <a href="contact.php" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Anything that needs prayer!</a>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">The Fundamental Beliefs</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4 text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus voluptatem quasi esse tenetur. Quis cupiditate officia, suscipit eos dolore expedita delectus qui ipsum soluta? Odit ipsum asperiores quam, sequi ad similique? Dolorem, voluptatem minima amet repellendus accusantium eum veritatis quisquam. Tempore sed vitae vero repellendus id adipisci ratione veniam explicabo.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Deeper Dive</button>
          <button type="button" class="btn btn-outline-light btn-lg px-4">Inquire</button>
        </div>
      </div>
    </div>
  </div>

</div>



<br><br><br><br><br>
<h2 style="margin: auto; padding-left: 100px;"><img src="assets/img/church.svg" width="70px" > Our Church Program</h2>
<div class="section_our_solution">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="our_solution_category">
      <div class="solution_cards_box">
      <?php
            $view_events = "select * from event_list order by event_id limit 2";
            $run_query = mysqli_query($conn, $view_events);
            if($run_query-> num_rows > 0){
            while($row = mysqli_fetch_assoc($run_query)) {
            ?>


          <div class="solution_card">
            <div class="hover_color_bubble"></div>
            <div class="so_top_icon">
              <svg id="Layer_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <g>
                      <g>
                        <path d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z" fill="#fae19e" />
                      </g>
                      <g>
                        <g>
                          <g>
                            <g>
                              <g>
                                <path d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z" fill="#fff9e9" />
                              </g>
                              <path d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z" fill="#fff4d6" />
                            </g>
                          </g>
                        </g>
                        <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z" fill="#ffeec2" />
                      </g>
                    </g>
                    <g>
                      <path d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z" fill="#fed23a" />
                      <path d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z" fill="#54b1ff" />
                      <path d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z" fill="#fdf385" />
                      <path d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z" fill="#faee6e" />
                      <path d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z" fill="#54b1ff" />
                      <g>
                        <path d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z" fill="#3da7ff" />
                      </g>
                    </g>
                  </g>
                  <g fill="#060606">
                    <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                    <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                    <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                    <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                    <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                    <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                    <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                  </g>
                </g>
              </svg>
            </div>
            <div class="solu_title">
              <h3><?php echo $row['event_title']; ?></h3>
            </div>
            <div class="solu_description">
              <p>
              <?php echo $row['event_content']; ?>
              </p>
              <button type="button" class="read_more_btn"><a href="events.php" class="event-btn-one">View More..</a></button>
            </div>
          </div>
<?php
}
}
?>


        </div>
        <!--  -->


        <div class="solution_cards_box sol_card_top_3">

        <?php
            $view_events = "select * from event_list order by event_id limit 2, 3";
            $run_query = mysqli_query($conn, $view_events);
            if($run_query-> num_rows > 0){
            while($row = mysqli_fetch_assoc($run_query)) {
            ?>

          <div class="solution_card">
            <div class="hover_color_bubble"></div>
            <div class="so_top_icon">
              <svg id="Layer_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <g>
                      <g>
                        <path d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z" fill="#fae19e" />
                      </g>
                      <g>
                        <g>
                          <g>
                            <g>
                              <g>
                                <path d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z" fill="#fff9e9" />
                              </g>
                              <path d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z" fill="#fff4d6" />
                            </g>
                          </g>
                        </g>
                        <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z" fill="#ffeec2" />
                      </g>
                    </g>
                    <g>
                      <path d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z" fill="#fed23a" />
                      <path d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z" fill="#54b1ff" />
                      <path d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z" fill="#fdf385" />
                      <path d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z" fill="#faee6e" />
                      <path d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z" fill="#54b1ff" />
                      <g>
                        <path d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z" fill="#3da7ff" />
                      </g>
                    </g>
                  </g>
                  <g fill="#060606">
                    <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                    <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                    <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                    <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                    <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                    <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                    <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                  </g>
                </g>
              </svg>
            </div>
            <div class="solu_title">
              <h3><?php echo $row['event_title']; ?></h3>
            </div>
            <div class="solu_description">
              <p>
              <?php echo $row['event_content']; ?>
              </p>
              <button type="button" class="read_more_btn"><a href="events.php" class="event-btn-one">View More..</a></button>
            </div>
          </div>

          <?php
}
}
?>
        </div>
      </div>
    </div>
  </div>
</div>




    <section class="news-section pt-50 pb-50">
        <div class="container">
            <div class="section-title">
                <h2><img src="assets/img/devotion.svg" width="70px" /> Our Latest Devotions</h2>
                <p >Devotions makes suspendice adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
<?php
$view_news = "select * from news";
$run_query = mysqli_query($conn, $view_news);
?>
            <div class="news_slider owl-carousel owl-theme">
<?php
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) {
?>

                <div class="item">
                    <div class="single-blog">
                        <div class="row gx-0">
                            <div class="col-lg-5 col-sm-6 col-xs-12">
                                <img src="admin/news-images/<?php echo $row['news_img']; ?>" alt="image">
                            </div>
                            <div class="col-lg-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <a href=""><i class='bx bx-user'></i>
                                    </a>
                                    <span><?php echo $row['news_place']; ?>, <?php echo $row['news_date']; ?></span>
                                    <h3><a href=""><?php echo $row['news_title']; ?></a></h3>
                                    <p><?php echo $row['news_content']; ?></p>
                                    <a href="news-details.php?id=<?php echo $row['news_id']; ?>" class="blog-btn">Read more..</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
<?php
}
}
?>
            </div>
        </div>
    </section>

<section class="my-5 py-5">
  <div class="container">
    <h3 style="margin:auto; background: #efefef; border-radius: 10px; padding-left:20px;">All About Ministry</h3>
    <div class="row align-items-center">
      <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
            <div class="front front-background" style="background-image: url(assets/img/facility/education.png); background-size: cover;">
              <div class="card-body py-7 text-center">
              <img src="assets/img/testi/sda.png" class="img img-fluid" alt="image" width="60px" height="50%" style="margin:auto;">
                <h3 class="text-white">Sharing In <br> The House Of God</h3>
                <p class="text-white opacity-8">There is love and fellowship in the house of the Lord</p>
              </div>
            </div>
            <div class="back back-background" style="background-image: url(assets/img/facility/food-donate.png); background-size: cover;">
              <div class="card-body pt-7 text-center">
                <h3 class="text-white">Join Our Fellowship Today</h3>
                <p class="text-white opacity-8"> God will always make a way.</p>
                <a href="contact.php" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Share Your Testimony</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-auto">
        <div class="row justify-content-start">
          <div class="col-md-6">
            <div class="info">
            <img src="assets/img/testi/childrens church.png" class="img img-fluid" alt="image" width="60px" height="50%">
              <h5 class="font-weight-bolder mt-3">Children Ministries</h5>
              <p class="pe-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem iure blanditiis nihil eligendi culpa soluta unde magni et sint?</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info">
            <img src="assets/img/testi/adventurer.png" class="img img-fluid" alt="image" width="60px" height="50%">
              <h5 class="font-weight-bolder mt-3">Adventurers</h5>
              <p class="pe-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aut suscipit laudantium illum delectus voluptate et earum?</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-start mt-5">
          <div class="col-md-6 mt-3">
          <img src="assets/img/testi/pathfinder.png" class="img img-fluid" alt="image" width="60px" height="50%">
            <h5 class="font-weight-bolder mt-3">Pathfinders</h5>
            <p class="pe-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptates eius nulla architecto dolor mollitia, reprehenderit odit?</p>
          </div>
          <div class="col-md-6 mt-3">
            <div class="info">
            <img src="assets/img/testi/senior youth.png" class="img img-fluid" alt="image" width="60px" height="50%">
              <h5 class="font-weight-bolder mt-3">Adventist Youth</h5>
              <p class="pe-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam tempora iusto voluptatem aspernatur molestiae magni blanditiis qui!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="team-section pt-50 pb-50">
        <div class="container">
            <div class="section-title">
                <h2>Church Board Members</h2>
                    <p>Quis ipsum suspendice consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendices gravida.</p>
            </div>
<?php
$view_data = "select * from member_list";
$run_query = mysqli_query($conn, $view_data);
?>
            <div class="team_slider owl-carousel owl-theme">
<?php
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) {
?>
                <div class="item">
                    <div class="team-item">
                        <div class="image">
                            <img src="admin/team-images/<?php echo $row['member_img']; ?>" alt="image" class="img img-thumbnail">
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">

                            <h3><?php echo $row['member_name']; ?></h3>
                            <span><?php echo $row['member_title']; ?></span>
                        </div>
                    </div>
                </div>
<?php
}
}
?>
            </div>
        </div>
    </section>

    <section class="testimonials-section pt-50 pb-50">
        <div class="container">
            <div class="section-title">
                <h2>See what God has done in People's lives,Our Testimonies.</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="testimonials-slider owl-carousel owl-theme">
                        <div class="testimonials-item">
                            <h3 class="review_title">I Passed My High School Grade</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, autem
                                totam. Et ipsam similique consequatur! Numquam, inventore delectus sequi,
                                ullam, placeat molestias velit dolore praesentium ea distinctio cum vitae
                                aperiam Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos,
                                veniam reprehenderit. Id sed itaque quam voluptates deleniti autem
                                facilis sequi! Voluptatibus voluptas dolorum nisi tenetur laboriosam modi
                                quis.</p>
                            <div class="testimonials-info clearfix">
                                <h3>Mary Nalule,</h3>
                                <span>Kira, <b>Bulindo</b></span>
                            </div>
                       </div><div class="testimonials-item">
                            <h3 class="review_title">I Got Healed from my Sickness”</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, autem
                                totam. Et ipsam similique consequatur! Numquam, inventore delectus sequi,
                                ullam, placeat molestias velit dolore praesentium ea distinctio cum vitae
                                aperiam Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos,
                                veniam reprehenderit. Id sed itaque quam voluptates deleniti autem
                                facilis sequi! Voluptatibus voluptas dolorum nisi tenetur laboriosam modi
                                quis.</p>
                            <div class="testimonials-info clearfix">
                                <h3>Albert Bukenya,</h3>
                                <span>Kampala, <b>Wandegeya</b></span>
                            </div>
                       </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="video_div">
                        <iframe src=""></iframe>
                    </div>
                </div>
            </div>

        </div>
        <div class="testimonials-shape">
            <img src="assets/img/bible.jpg" alt="image" width="300px" class="img-thumbnail" style="border-radius: 10px"/>
        </div>
    </section>

    <section class="subscription-section ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="subscription_div">
                        <h3>We Are A Family Willing To Help You Get To Heaven The Right Way.</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="subscription_div">
                        <a href="contact.php" class="btn btn-sm  bg-gradient-primary">Inquiry</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Hide the preloader when the page is fully loaded
        var preloader = document.getElementById("preloader");
        preloader.style.display = "none";
    });
</script>



<?php include'footer.php'; ?>




</body>

</html>
