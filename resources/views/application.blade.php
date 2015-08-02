<div id="headerbar" class="ui clearing basic segment">
  <h3 class="ui left floated header">
    <a href="{{url('/')}}" class="ui medium image">
      <img src="/images/logo.png" style="height: 4em;">
    </a>
  </h3>
  <h3 class="ui right floated header">
    @if (Auth::user())
    <div class="ui two column grid">
      <div class="row">
        <div class="sixteen wide column">
          <button class="ui basic fluid button">
            <div class="ui dropdown">
              <div class="default text">{{Auth::user()->agentAccount->name}}</div>
              <i class="dropdown icon"></i>
              <div class="menu">
                @foreach(Auth::user()->accounts as $account)
                  <div class="item" data-value="{{$account->name}}">{{$account->name}}</div>
                @endforeach
              </div>
            </div>
          </button>
        </div>
      </div>
      <div class="two column row">
        <div class="eleven wide column">
          <button class="ui basic fluid button">
            <a href="{{url('dashboard')}}"> My Account </a>
          </button>
        </div>
        <div class="five wide column">
          <button class="ui basic fluid button">
            <a href="{{url('auth/logout')}}"> <i class="ui sign out icon"></i> </a>
          </button>
        </div>
      </div>
    </div>
    @else
    <div class="ui basic segment">
      <div class="ui two column grid">
        <div class="column">
          <h5 class="ui subheader">
            <a href="{{ url('auth/login') }}" >
              Login
            </a>
          </h5>
        </div>
        <div class="ui vertical divider">
          |
        </div>
        <div class="column" >
          <h5 class="ui olive subheader" >
            <a href="{{ url('auth/register') }}" style="color: #fbbd08; font-weight: bolder;">
              Register
            </a>
          </h5>
        </div>
      </div>
    </div>
    @endif
  </h3>
</div>



@section('leftsidebar')
  <div  class="sidebar" id="rightsidebar">
	   @widget('departments')
  </div>
@endsection


@extends('app')

@section('rightsidebar')
  @widget('dockets')
@endsection

@section('content')
  <div class="ui padded segment">
    <h4 class="ui center aligned dividing header">
      <img src="/images/logo.png" class="ui small centered image">
    </h4>
    <h4 class="ui olive center aligned icon header">
      THE COUNTY GOVERNMENT OF UASIN GISHU
    </h4>
    <h5 class="ui header">
      VISION
      <div class="sub header">A Prosperous and Attractive County in Kenya and Beyond</div>
    </h5>
    <h5 class="ui header">
      <div class="content">
        MISSION
        <div class="sub header">To Serve And Improve People's Livelihood Through Good Leadership, Innovative Technology and Efficient Infrastructure</div>
      </div>
    </h5>
    <h5 class="ui header">
      <div class="content">
        CORE VALUES
        <div class="sub header">
          <ul class="ui list">
            <div class="item">
              <i class="bullseye icon"></i>
              Integrity
            </div>
            <div class="item">
              <i class="bullseye icon"></i>
              Teamwork
            </div>
            <div class="item">
              <i class="bullseye icon"></i>
              Innovativeness
            </div>
            <div class="item">
              <i class="bullseye icon"></i>
              Accountability
            </div>
          </ul>
        </div>
      </div>
    </h5>
	</div>
@endsection


@section('scripts')
  <script type="text/javascript">
    $('.ui.accordion').accordion();
  </script>
@stop


<div class="six wide column">
  <div class="ui segment">
    <div class="ui basic padded segment">
      <h5 class="ui dividing grey header"> What is County e-services? </h5>
      <p>
        The County Government of Uasin Gishu is cinstantly improving its service delivery to citizens and
        the business community. E-services portal is your one-stop-shop to make dealing with the county easy.
        Services are available 24 7 and through out  the week. You do not need to visit the county for your services.
      </p>
      <p>
        Aply the service anywahere from the cofort of your home, office or cybercafe
        To answer your questions on a specific topic, click and read more.
      </p>
    </div>

    <div class="ui basic segment">
        <h4 class="ui dividing header">
          Online Services
          <div class="sub header"> <a target="_blank" href="{{asset('uploads/bill.xlsx')}}"> View Charges </a> </div>
        </h4>
        <p>&nbsp</p>

        <p>The following are some of the services availbale on this portal to logged in users.</p>
        <div class="ui accordion">
          @foreach($services as $service)
            <!-- accordion item -->
            <div class="title">
              <i class="dropdown icon"></i>
              <strong class="ui small header"> {{$service->Title}} </strong>
            </div>
            <div class="content">
              <p>
                {{$service->ShortDecsription}}
              </p>
                <a class="ui teal" href="#"> More Information <i class="ui right double angle icon"></i>  </a>
            </div>
          @endforeach

        </div>
    </div>

    <div class="ui basic padded segment">
      <div class="ui list">
        <a class="item">
          <i class="help icon"></i>
          <div class="content">
            <div class="header">How do I make payment?</div>
            <div class="description">
              The county has an MPESA paybill number 646464 that
              customers will use to make payments online. Details are found in the invoice
              once have filled the applications and approved.
              Payments can also be made to the KCB revenue account. Details are contained in
              the invoice
            </div>
          </div>
        </a>
        <a class="item">
          <i class="help icon"></i>
          <div class="content">
            <div class="header">How do I get ntifications?</div>
            <div class="description">
              The portal isself service meaning that you get SMS notificatins and emails for your applications.
              Whether they are rejected, approved or requested to rovide more documentation.
            </div>
          </div>
        </a>
        <a class="item">
          <i class="help icon"></i>
          <div class="content">
            <div class="header">How do I get my aplications?</div>
            <div class="description">
              All documents will be send to your email. Once your applications have been approved,
              you will get an invoice via email and once payment is made online(MPESA or bank)
              your permit or SBP will begenerated and sent to your mail for you to print.
            </div>
          </div>
        </a>
        <a class="item">
          <i class="help icon"></i>
          <div class="content">
            <div class="header">If I have no Computer what do I do?</div>
            <div class="description">
              The service will be available from all the cybers across the county. Cyber cafe operators have been trained
              to work with wananchi on the on-line service provision.
            </div>
          </div>
        </a>
      </div>
    </div>

    Contact Us:
    Business Permits 072234567000
    Land and property rates 072234567000
    Health 072234567000
    Halls/Stadium 072234567000

  </div>
</div>


  <div class="ui basic padded segment">
    <h5 class="ui dividing grey header"> What is County e-services? </h5>
    <p>
      The County Government of Uasin Gishu is cinstantly improving its service delivery to citizens and
      the business community. E-services portal is your one-stop-shop to make dealing with the county easy.
      Services are available 24 7 and through out  the week. You do not need to visit the county for your services.
    </p>
    <p>
      Aply the service anywahere from the cofort of your home, office or cybercafe
      To answer your questions on a specific topic, click and read more.
    </p>
  </div>
