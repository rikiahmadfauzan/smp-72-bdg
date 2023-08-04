@extends('layouts')
@section('content')
    <main id="main">
        <section>
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item">Galeri</li>
                        <li class="breadcrumb-item active" aria-current="page">Video</li>
                    </ol>
                </nav>
            </div>
            <div class="container">
                <div class="vid-main-wrapper clearfix">
                    <div class="vid-container py-lg-5">
                        <iframe id="vid_frame" class="rounded-2" src="https://www.youtube.com/embed/asNdz10WR6w?rel=0&showinfo=0&autohide=1"
                        frameborder="0" width="560" height="315"></iframe>
                    </div>
                        <div class="vid-list-container">
                            <ol id="vid-list">
                                <li>
                                    <a href="javascript:void();"
                                        onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/asNdz10WR6w?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                        <span class="vid-thumb "><img class="rounded-1" width=72
                                                src="https://img.youtube.com/vi/asNdz10WR6w/default.jpg" /></span>
                                        <div class="desc">WeatherBeater™ Product Video</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();"
                                        onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/VndEJ3RqwCc?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                        <span class="vid-thumb"><img class="rounded-1" width=72
                                                src="https://img.youtube.com/vi/VndEJ3RqwCc/default.jpg" /></span>
                                        <div class="desc">X-act Contour® Product Video</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();"
                                        onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/KHxNpXovl58?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                        <span class="vid-thumb"><img class="rounded-1" width=72
                                                src="https://img.youtube.com/vi/KHxNpXovl58/default.jpg" /></span>
                                        <div class="desc">GearBox® Product Video</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();"
                                        onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/D_a2UBGsePQ?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                        <span class="vid-thumb"><img class="rounded-1" width=72
                                                src="https://img.youtube.com/vi/D_a2UBGsePQ/default.jpg" /></span>
                                        <div class="desc">Mud Guards Product Video</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();"
                                        onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/vYoh2IgoBXg?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                        <span class="vid-thumb"><img class="rounded-1" width=72
                                                src="https://img.youtube.com/vi/vYoh2IgoBXg/default.jpg" /></span>
                                        <div class="desc">Wheel Well Guards Product Video</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();"
                                        onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/RTHI_uGyfTM?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                        <span class="vid-thumb"><img class="rounded-1" width=72
                                                src="https://img.youtube.com/vi/RTHI_uGyfTM/default.jpg" /></span>
                                        <div class="desc">Cargo Liner Product Video</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();"
                                        onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/EvTjAjLNphE?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                        <span class="vid-thumb"><img class="rounded-1" width=72
                                                src="https://img.youtube.com/vi/EvTjAjLNphE/default.jpg" /></span>
                                        <div class="desc">Husky Liners Products</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();"
                                        onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/-Qpc79oaJQg?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                        <span class="vid-thumb"><img class="rounded-1" width=72
                                                src="https://img.youtube.com/vi/-Qpc79oaJQg/default.jpg" /></span>
                                        <div class="desc">Custom Molded Mud Guards</div>
                                    </a>
                                </li>
                                </ul>
                        </div>
                </div>
            </div>
        </section>
    </main>
@endsection
