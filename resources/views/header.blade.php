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
            <a href="#"> My Account </a>
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
