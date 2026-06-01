@extends('layouts.app')

@section('body')
    <!-- Sidebar Backdrop (Mobile) -->
    <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

    <!-- Sidebar -->
    <aside class="mk-sidebar" id="mkSidebar">
        <x-admin.sidebar />
    </aside>

    <!-- Topbar -->
    <header class="mk-topbar" id="mkTopbar">
        <x-admin.topbar />
    </header>

    <!-- Main Content -->
    <main class="mk-main" id="mkMain">
        <div class="content-wrapper">
            @if(session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        Toast.fire({
                            icon: 'success',
                            title: '{{ session('success') }}'
                        });
                    });
                </script>
            @endif

            @if(session('error'))
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        Toast.fire({
                            icon: 'error',
                            title: '{{ session('error') }}'
                        });
                    });
                </script>
            @endif

            @yield('content')
        </div>
        
        <x-admin.footer />
    </main>
@endsection