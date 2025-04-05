        <div id="head">
            <h1><a href="{{ route('top') }}"><img src="images/atlas.png"></a></h1>
            <div id="menu-container" >
                <div id="user-info">
                    <p>〇〇さん</p>
                </div>
                <button type="button" class="menu-btn">
                    <span class="inn"></span>
                </button>
                
                <nav class="menu">
                    <ul>
                        <li><a href="{{ route('top') }}">HOME</a></li>
                        <li><a href="{{ route('profile') }}">プロフィール編集</a></li>
                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                ログアウト
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
