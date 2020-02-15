<div class="sidebar">
    <div class="user-profile">
        <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="{{ asset('images/profile/male/image_1.png') }}"
                alt="profile image">
        </div>
        <div class="info-wrapper">
            <p class="user-name">thilakshan</p>

        </div>
    </div>
    <ul class="navigation-menu">
        <li class="nav-category-divider">MAIN</li>
        <li>
            <a href="{{ route('dashboard') }}">
                <span class="link-title">Dashboard</span>
                <i class="mdi mdi-gauge link-icon"></i>
            </a>
        <li>
            <a href="{{ route('post.index') }}">
                <span class="link-title">Posts</span>
                <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('user.index') }}">
                <span class="link-title">User</span>
                <i class="mdi mdi-account link-icon"></i>
            </a>
        </li>
        </li>
    </ul>

</div>
