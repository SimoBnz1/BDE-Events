<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','BDE Events')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: "#09090b",
                        card: "#18181b",
                        neon: "#34d399",
                        primary: "#6366f1"
                    }
                }
            }
        }
    </script>

</head>

<body class="bg-dark text-white antialiased">

<div class="flex min-h-screen">

    @include('admin.partials.sidebar')

    <main class="flex-1 p-8">

        @yield('content')

    </main>

</div>

<script>
lucide.createIcons();
</script>

</body>
</html>