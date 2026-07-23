<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDE Events - Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: "#050816",
                        surface: "#0F172A",
                        primary: "#3B82F6",
                        neon: "#06B6D4",
                        purple: "#8B5CF6"
                    },
                    boxShadow: {
                        neon: "0 0 30px rgba(6,182,212,.25)"
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background: #050816;
        }

        .grid-bg {
            background-image:
                linear-gradient(rgba(255, 255, 255, .04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, .04) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        .glass {
            background: rgba(15, 23, 42, .65);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, .08);
        }

        .gradient-text {
            background: linear-gradient(90deg, #3B82F6, #06B6D4, #8B5CF6);
            -webkit-background-clip: text;
            color: transparent;
        }

        .float {
            animation: floating 4s ease-in-out infinite;
        }

        @keyframes floating {
            50% {
                transform: translateY(-8px);
            }
        }
    </style>
</head>

<body class="text-white overflow-hidden text-sm">

    <div class="fixed inset-0 grid-bg opacity-30"></div>

    <!-- MAIN CONTAINER WITH MAX-WIDTH FOR PC -->
    <main class="relative min-h-screen grid lg:grid-cols-2 max-w-6xl mx-auto px-4 items-center">

        <!-- LEFT SIDE -->
        <section class="hidden lg:flex flex-col justify-center px-8 relative">
            <div>
                <div class="inline-flex items-center gap-2 glass px-4 py-1.5 rounded-full text-cyan-300 text-xs">
                    <i data-lucide="sparkles" class="w-4 h-4"></i>
                    Campus Events Platform
                </div>

                <h1 class="mt-6 text-4xl font-black leading-tight">
                    Welcome back to <br>
                    <span class="gradient-text">BDE.Events</span>
                </h1>

                <p class="mt-4 text-gray-400 max-w-md text-sm leading-relaxed">
                    Connectez-vous pour découvrir les événements, gérer vos réservations et accéder à votre expérience campus.
                </p>

                <!-- FLOATING ILLUSTRATION -->
                <div class="relative mt-8 w-[360px] h-[200px] float">
                    <div class="absolute inset-0 bg-blue-500/20 blur-[60px] rounded-full"></div>

                    <div class="relative glass rounded-[24px] p-6 shadow-neon">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-gray-400">Upcoming</p>
                                <h2 class="text-lg font-bold">Campus Night</h2>
                            </div>

                            <div class="bg-cyan-500/20 p-2.5 rounded-xl">
                                <i data-lucide="calendar" class="w-5 h-5 text-cyan-400"></i>
                            </div>
                        </div>

                        <div class="mt-6 flex gap-3 text-xs">
                            <div class="bg-blue-500/20 px-4 py-2 rounded-lg">
                                350 Students
                            </div>
                            <div class="bg-purple-500/20 px-4 py-2 rounded-lg">
                                Live Event
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- RIGHT LOGIN -->
        <section class="flex items-center justify-center px-4 py-6">
            <div class="w-full max-w-sm glass rounded-[28px] p-7 shadow-neon">

                <div class="text-center mb-6">
                    <div class="mx-auto w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-400 flex items-center justify-center shadow-md">
                        <i data-lucide="log-in" class="w-7 h-7"></i>
                    </div>

                    <h2 class="text-2xl font-bold mt-4">Login</h2>
                    <p class="text-xs text-gray-400 mt-1">Access your campus space</p>
                </div>

                <form class="space-y-4" method="POST" action="{{ route('login')}}">
                    @csrf
                    <div>
                        <label class="text-xs text-gray-400">Email</label>
                        <div class="mt-1.5 relative">
                            <i data-lucide="mail" class="absolute left-3.5 top-3 w-4 h-4 text-gray-400"></i>
                            <input
                                type="email"
                                name="email"
                                placeholder="email@campus.com"
                                class="w-full bg-white/5 border border-white/10 rounded-xl py-2.5 pl-10 pr-4 text-xs outline-none focus:border-cyan-400 transition">

                        </div>
                    </div>

                    <!-- PASSWORD -->
                    <div>
                        <label class="text-xs text-gray-400">Password</label>
                        <div class="mt-1.5 relative">
                            <i data-lucide="lock" class="absolute left-3.5 top-3 w-4 h-4 text-gray-400"></i>
                            <input
                                type="password"
                                name="password"
                                placeholder="••••••••"
                                class="w-full bg-white/5 border border-white/10 rounded-xl py-2.5 pl-10 pr-4 text-xs outline-none focus:border-cyan-400 transition">
                        </div>
                    </div>

                    <div class="flex justify-between text-xs text-gray-400">
                        <label class="flex gap-1.5 items-center cursor-pointer">
                            <input type="checkbox" class="rounded bg-white/5 border-white/10">
                            Remember me
                        </label>
                        <a class="text-cyan-400 hover:underline cursor-pointer">Forgot password?</a>
                    </div>

                    <button type="submit" class="w-full mt-2 py-3 rounded-xl font-semibold text-xs bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 hover:opacity-90 transition shadow-md">
                        Sign in
                    </button>

                    <div class="my-4 flex items-center gap-3">
                        <div class="h-px bg-white/10 flex-1"></div>
                        <span class="text-[10px] text-gray-500">OR</span>
                        <div class="h-px bg-white/10 flex-1"></div>
                    </div>

                    <button type="button" class="w-full glass py-2.5 rounded-xl flex justify-center items-center gap-2 text-xs hover:bg-white/10 transition">
                        <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                        Continue with Campus ID
                    </button>

                    <p class="text-center text-xs text-gray-400 mt-5">
                        New student?
                        <span class="text-cyan-400 font-medium cursor-pointer hover:underline">Create account</span>
                    </p>
                </form>

            </div>
        </section>

    </main>

    <script>
        lucide.createIcons();
    </script>

</body>

</html>