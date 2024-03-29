@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Services | Caretaker Services</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="service.css">
</head>
<body>
	
<section id="child-services" class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Child Care Packages</h2>
        <h3 class="section-subheading text-muted">We offer flexible packages to meet your child care needs.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="https://illumine.app//srv/htdocs/wp-content/uploads/2021/01/child-care-home-1200x675-cropped.jpg" alt="Child Care Day Package">
          <div class="card-body">
            <h4 class="card-title">Day Package</h4>
            <p class="card-text">8-12 Hours</p>
            <p class="card-text">Our Child Day Package is perfect for parents who need help with their children during the day. Our caretakers are trained to provide a safe and nurturing environment for your children, and can assist with activities, meals, and basic needs.</p>
            <p class="card-text"><strong>Rs.1000</strong>/day</p>
            <a href="childday" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="https://img.freepik.com/premium-photo/mother-feeding-daughter-with-baby-formula-mug-healthy-food-child-care_73872-4162.jpg?w=740" alt="Child Care Week Package">
          <div class="card-body">
            <h4 class="card-title">Week Package</h4>
             <p class="card-text">Our Child Week Package is perfect for parents who need reliable care for their children on a weekly basis. With this package, you'll get a dedicated caretaker who will take care of your child for 5 days a week, from Monday to Friday, for 8 hours each day.</p><br>
            <p class="card-text"><strong>Rs.5500</strong>/week</p>
            <a href="childweek.html" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="https://raisingchildren.net.au/__data/assets/image/0023/56453/child-care-planning-preparing-wide.jpg" alt="Child Care Month Package">
          <div class="card-body">
            <h4 class="card-title">Month Package</h4>
            <p class="card-text">Our Child Month Package is perfect for families who need long-term care for their children. This package includes a dedicated caretaker who will provide daily care for your child, including feeding, bathing, and playtime.</p> <br><br>
            <p class="card-text"><strong>Rs.25000</strong>/month</p>
            <a href="childmonth.html" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Elderly Care Packages</h2>
        <h3 class="section-subheading text-muted">We offer flexible packages to meet your elderly care needs.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="https://5.imimg.com/data5/SELLER/Default/2021/1/DF/JN/PZ/113033045/elderly-care-service-500x500.jpg" alt="Child Care Day Package">
          <div class="card-body">
            <h4 class="card-title">Day Package</h4>
            <p class="card-text"></p>
            <p class="card-text"><strong>Rs.1200</strong>/day</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="https://cdn.visitingangels.com/cgcimages/111-16x7-16x7.jpg" alt="Child Care Week Package">
          <div class="card-body">
            <h4 class="card-title">Week Package</h4>
            <p class="card-text">6 Days</p>
            <p class="card-text"><strong>Rs.7000</strong>/week</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="https://www.choosecomforthome.com/wp-content/uploads/2016/05/elderly-personal-care.jpg" alt="Child Care Month Package">
          <div class="card-body">
            <h4 class="card-title">Month Package</h4>
            <p class="card-text">4 Weeks</p>
            <p class="card-text"><strong>Rs.28000</strong>/month</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
@endsection