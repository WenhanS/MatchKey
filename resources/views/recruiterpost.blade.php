<!DOCTYPE html>
@extends('layouts.app')

@section('content')
</head>
  <body class="bg-light">
  <div class="py-5">
    <h2>Matching Check-in</h2>
    <p class="lead">Please complete the following things to finish the check-in function</p>
  </div>
  {!! Form::open(['url'=> 'recruiterpost/submit'])!!}
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Job Details</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
            <div class="col-md-12 mb-3">
            {{Form::label('companyname','Job decription')}}
			      {{Form::text('companyname','',['class'=> 'form-control','placeholder'=>''])}}  
            </div>
        </div>

        <div class="mb-3">
        {{Form::label('email','Contact Email')}}
			  {{Form::email('email','',['class'=> 'form-control','placeholder'=>'example@example.com'])}}
        </div>

        <div class="mb-3">
        {{Form::label('address','Company Address')}}
			  {{Form::text('address','',['class'=> 'form-control','placeholder'=>'1234 Main St'])}}
        </div>

        <div class="mb-3">
        {{Form::label('address','Company Address 2')}} <span class="text-muted">(Optional)</span>
			  {{Form::text('address2','',['class'=> 'form-control','placeholder'=>'Apartment or suite'])}}
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
          {{Form::label('jobtype','Job Type required')}}
          {{Form::select('jobtype', array('administration' => 'Administration', 'advocacy' => 'Advocacy &amp; Campaigns', 'agedcare' => 'Aged Care &amp; Seniors’ Rights', 'alcoholandotherdrugs' => 'Alcohol &amp; Other Drugs', 'animalwelfareandprotection' => 'Animal Welfare &amp; Protection', 'businessdevelopment' => 'Business Development &amp; Sales', 'careandsupportservices' => 'Care &amp; Support Work', 'coopsandcreditunions' => 'Co-ops &amp; Credit Unions', 'communicationsandmarketing' => 'Communications &amp; Marketing', 'communityanddevelopment' => 'Community Development', 'conservationandmanagement' => 'Conservation &amp; Land Management', 'corporatesocialresponsibility' => 'Corporate Social Responsibility','disabilityservices'=>'Disability Services','earlychildhood'=>'Early Childhood','ecotourism'=>'Eco-Tourism','educationandtraining'=>'Education &amp; Training','environmentandsustainability'=>'Environment &amp; Sustainability','executiveseniormanagement'=>'Executive &amp; Senior Management','familyservices'=>'Family Services','fairtradeorganicandecoretail'=>'FairTrade &amp; Organic','financeandaccounting'=>'Finance &amp; Accounting','fundraising'=>'Fundraising','glbt'=>'GLBTI &amp; Sexual Health','greenarchitectureandproperty'=>'Green Architecture/Property','greenenergy'=>'Green Energy','greenproductsandservices'=>'Green Products &amp; Services','healthcare'=>'Health Care &amp; Allied Health','healthpromotion'=>'Health Promotion','housing'=>'Housing &amp; Homelessness','hrandemploymentservices'=>'HR &amp; Employment Services','indigenous'=>'Indigenous','internationalaidandevelopment'=>'International Aid &amp; Development','itandcommunicationtechnology'=>'I.T. &amp; Communication Technology','legalandhumanrights'=>'Legal &amp; Human Rights','management'=>'Management','mediaartsandentertainment'=>'Media &amp; Arts','medicalresearch'=>'Medical Research','mentalhealthandcounselling'=>'Mental Health &amp; Counselling','multiculturalismdiversity'=>'Multiculturalism &amp; Diversity','nursing'=>'Nursing','operationsriskmanagement'=>'Operations &amp; Risk Management','organicfarmingandgardening'=>'Organic Farming &amp; Gardening','policyandresearch'=>'Policy &amp; Research','projectmanagement'=>'Project Management','recyclingandwastemanagement'=>'Recycling &amp; Waste Management','customerservice'=>'Retail &amp; Hospitality','socialwork'=>'Social Work','sustainabletransport'=>'Sustainable Transport','tradesandservices'=>'Trades &amp; Services','unionsandworkersrights'=>'Unions &amp; Workers Rights','volunteermanagement'=>'Volunteer Management','womensorganisationsandservices'=>'Women Organisations &amp; Services','youthservices'=>'Youth'), '',['class'=>'custom-select d-block w-100'])}}
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
            {{Form::label('city','City required')}}
            {{Form::select('city', array('Melbourne' => 'Melbourne', 'Regional VIC' => 'Regional VIC','Sydney'=>'Sydney','Regional NSW'=>'Regional NSW','Brisbane &amp; Gold Coast'=>'Brisbane &amp; Gold Coast','Regional QLD'=>'Regional QLD','Perth'=>'Perth','Regional WA'=>'Regional WA','Adelaide'=>'Adelaide','Regional SA'=>'Regional SA','Hobart'=>'Hobart','Regional TAS'=>'Regional TAS','Darwin'=>'Darwin','Regional NT'=>'Regional NT','Canberra &amp; ACT'=>'Canberra &amp; ACT'), 'Melbourne',['class'=>'custom-select d-block w-100'])}}
            </div>
        </div>
        
        <div class="row">
          <div class="col-md-6 mb-3">
          {{Form::label('education','Education')}}
          {{Form::select('education', array('Postgraduate Degree Level' => 'Postgraduate Degree Level', 'Graduate Diploma and Graduate Certificate Level' => 'Graduate Diploma and Graduate Certificate Level','Bachelor Degree Level'=>'Bachelor Degree Level','Advanced Diploma and Diploma Level'=>'Advanced Diploma and Diploma Level','Certificate Level'=>'Certificate Level','Senior Secondary Education'=>'Senior Secondary Education','Junior Secondary Education'=>'Junior Secondary Education','Other education'=>'Other education','No Education'=>'No Education'), '',['class'=>'custom-select d-block w-100'])}}
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
            {{Form::label('experience','Working experience required')}}
            {{Form::select('experience', array('0 years' => '0 years', '1-2 years' => '1-2 years','2-5 years' => '2-5 years','5+ years' =>'5+ years'), '0 years',['class'=>'custom-select d-block w-100'])}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
            {{Form::label('salaryrange','Salary')}}<span class="text-muted">/month</span>
			      {{Form::number('salaryrange','',['class'=> 'form-control','placeholder'=>'/month', 'min'=>'0'])}}
            </div>
        </div>

        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address" required>
          <label class="custom-control-label" for="same-address">I confirm that company details and check-in details are vaild</label>
        </div>
        <hr class="mb-4">
        {{Form::submit('Post a job',['class'=>'btn btn-primary'])}}
      </form>
      {!!Form::close()!!}
    </div>
@endsection