        <div id="head">
            <h1><a><img src="images/atlas.png"></a></h1>
            <div id="">
                <div id="">
                    <p>〇〇さん</p>
                </div>
                <ul>
                    <li><a href="">ホーム</a></li>
                    <li><a href="">プロフィール</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">ログアウト</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
