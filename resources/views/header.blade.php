<div id="headerbar" class="ui grid">
  <div class="twelve wide column">
    <a href="{{url('/')}}" class="ui medium image">
      <img src="/images/logo.png" style="height: 4em;">
    </a>
  </div>
  <div class="four wide column ">
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
                  <a href="{{url('dashboard/swap', $account->id)}}" class="item" data-value="{{$account->name}}">{{$account->name}}</a>
                @endforeach
              </div>
            </div>
          </button>
        </div>
      </div>
      <div class="row">
        <div class="eight wide column">
          <a href="{{url('dashboard')}}" class="ui basic fluid button"> My Account </a>
        </div>
        <div class="eight wide column">
          <a href="{{url('auth/logout')}}" class="ui basic fluid button"> <i class="ui sign out icon"></i> Log out </a>
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
  </div>
</div>
