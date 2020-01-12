@extends('layouts.app')

@section('content')
<div class="container">



        <div class="row">
            <div class="col-3 p-5">
                <img width="220" src="https://res.cloudinary.com/practicaldev/image/fetch/s--MYZ584sb--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://secure.meetupstatic.com/photos/event/4/c/b/b/600_468259643.jpeg" alt="">
            </div>

            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user->username}}</h1>

                    <a href="#">Add New Post</a>

                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong>posts</div>
                    <div class="pr-5"><strong>23k</strong>followers</div>
                    <div class="pr-5"><strong>23k</strong>following</div>
                </div>

                <div class="pt-4 font-weight-bold">{{$user->profile->title ?? 'N/A'}}</div>

                <div>{{$user->profile->description}}</div>
                <div> <a href="http://127.0.0.1:8000/home#">{{$user->profile->url ?? 'N/A'}}</a> </div>

            </div>

        </div>

        <div class="row">

            <div class="col-4">
                <img class="w-100 h-75" decoding="auto" srcset="https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/79601153_2812096528884918_365798059590369718_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=0zn8SzWAFhUAX9ij43z&oh=aa77ed7462b47eafd42be6e0c19ab3dc&oe=5E95FE32 640w,https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/79601153_2812096528884918_365798059590369718_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=0zn8SzWAFhUAX9ij43z&oh=97636f7940119024256464837bc027c5&oe=5EAFA532 750w,https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/e35/79601153_2812096528884918_365798059590369718_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=0zn8SzWAFhUAX9ij43z&oh=176e3ae77223806e25b98a542a953749&oe=5E9D12C4 1080w" style="object-fit: cover;">  </div>
            <div class="col-4">

                <img class="w-100 h-75" decoding="auto" srcset="https://instagram.fkhi2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/79870380_2413198332268417_8424305469020612916_n.jpg?_nc_ht=instagram.fkhi2-1.fna.fbcdn.net&amp;_nc_cat=1&amp;_nc_ohc=VAFGlrD5TrgAX8gPxzS&amp;oh=2eb957d7a9ff72d9c5cb1daee9ba400c&amp;oe=5EAE6BD4 640w,https://instagram.fkhi2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/79870380_2413198332268417_8424305469020612916_n.jpg?_nc_ht=instagram.fkhi2-1.fna.fbcdn.net&amp;_nc_cat=1&amp;_nc_ohc=VAFGlrD5TrgAX8gPxzS&amp;oh=1dc12d968a50e840ec57bf67771ebf36&amp;oe=5EA3EE10 750w,https://instagram.fkhi2-1.fna.fbcdn.net/v/t51.2885-15/e35/79870380_2413198332268417_8424305469020612916_n.jpg?_nc_ht=instagram.fkhi2-1.fna.fbcdn.net&amp;_nc_cat=1&amp;_nc_ohc=VAFGlrD5TrgAX8gPxzS&amp;oh=fc28641d1da2eb25a6cf950dfae28be0&amp;oe=5EA0A9BE 1080w" src="./Laravel_files/79870380_2413198332268417_8424305469020612916_n.jpg" style="object-fit: cover;">
            </div>
            <div class="col-4">
                <img class="w-100 h-75" decoding="auto" srcset="https://instagram.fkhi2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/80424162_2505303446373794_7869685591221157026_n.jpg?_nc_ht=instagram.fkhi2-1.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=qvsLR-X8QcgAX_XKr2Y&amp;oh=3c892b5bf5a94c22ee984972d70b3834&amp;oe=5EA8445A 640w,https://instagram.fkhi2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/80424162_2505303446373794_7869685591221157026_n.jpg?_nc_ht=instagram.fkhi2-1.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=qvsLR-X8QcgAX_XKr2Y&amp;oh=3a3187f2b133f67bc6b48e6b87cfc255&amp;oe=5E8D349E 750w,https://instagram.fkhi2-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/80424162_2505303446373794_7869685591221157026_n.jpg?_nc_ht=instagram.fkhi2-1.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=qvsLR-X8QcgAX_XKr2Y&amp;oh=d753663dc1826f5f10f0a8279cba8445&amp;oe=5EAECB9F 1080w" src="./Laravel_files/80424162_2505303446373794_7869685591221157026_n.jpg" style="object-fit: cover;">
            </div>
        </div>


        <div class="row" style="margin-bottom:10%;    margin-top: -90px;">

            <div class="col-4">
                <img class="w-100 h-75" srcset="https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/79768628_619082798864785_1804298563829869381_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=oRT_wSpDXqwAX9XuO4j&oh=4307835a73149f77595212cf122b2f26&oe=5E98F8A8 640w,https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/79768628_619082798864785_1804298563829869381_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=oRT_wSpDXqwAX9XuO4j&oh=bf22c77b28490080755c27f5e0f43579&oe=5E9FD1A8 750w,https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/79768628_619082798864785_1804298563829869381_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=oRT_wSpDXqwAX9XuO4j&oh=64e080053ba1b5c7eac9dc48bc8fcc0d&oe=5EA3754D 1080w" src="./Laravel_files/82004762_136615097308042_5608655045653229654_n.jpg" style="object-fit: cover;">
            </div>
            <div class="col-4">

                <img class="w-100 h-75" decoding="auto" srcset="https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/81517356_608770106620266_741281427500518045_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=4MlgIJ5xMCwAX8r4UHo&oh=239e4b0bcf4dc64881b658612d5b899e&oe=5EA85F79 640w,https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/81517356_608770106620266_741281427500518045_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=4MlgIJ5xMCwAX8r4UHo&oh=13831cc47462dd1ed24a333522d25415&oe=5E93DF86 750w,https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/81517356_608770106620266_741281427500518045_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=4MlgIJ5xMCwAX8r4UHo&oh=3615aeccb14368bca8b9fac760855a59&oe=5E94BB4A 1080w" style="object-fit: cover;">
            </div>
            <div class="col-4">
                <img class="w-100 h-75" decoding="auto" srcset="https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/80633111_542209006396293_5718382442045384365_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=1adbuN9uF7sAX_bReb2&oh=28f19e775e15cc8adcc30ec464640e29&oe=5EA01736 640w,https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/80633111_542209006396293_5718382442045384365_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=1adbuN9uF7sAX_bReb2&oh=8ee494cb9bba59846686bf0dcf02153c&oe=5E9DB536 750w,https://instagram.flux1-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/80633111_542209006396293_5718382442045384365_n.jpg?_nc_ht=instagram.flux1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=1adbuN9uF7sAX_bReb2&oh=2381b84f27b410423e7d7cae9da4d10a&oe=5E96F9D3 1080w" style="object-fit: cover;">
            </div>
        </div>

</div>
@endsection
