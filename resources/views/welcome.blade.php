<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RoomBook - Discussion Room Booking System">
    <title>RoomBook | Discussion Room Booking</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                            950: '#172554',
                        }
                    },
                    boxShadow: {
                        soft: '0 12px 40px rgba(15, 23, 42, 0.08)',
                        card: '0 8px 30px rgba(15, 23, 42, 0.06)',
                    }
                }
            }
        }
    </script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        input[type="date"],
        input[type="time"],
        input[type="number"] {
            color-scheme: light;
        }
    </style>
</head>

<body class="bg-white text-slate-900 antialiased">

<!-- =========================================================
    NAVBAR
========================================================= -->
<header
    x-data="{ mobileMenuOpen: false }"
    class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/90 backdrop-blur-xl"
>
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-6 lg:px-8">

        <!-- Logo -->
        <a href="#home" class="flex items-center gap-3">
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-slate-950 text-white shadow-sm">
                <i data-lucide="door-open" class="h-5 w-5"></i>
            </div>

            <div>
                <div class="text-lg font-bold tracking-tight text-slate-950">
                    RoomBook
                </div>
                <div class="text-[11px] font-medium tracking-wide text-slate-500">
                    Discussion Room Booking
                </div>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden items-center gap-8 lg:flex">
            <a href="#home"
               class="text-sm font-medium text-slate-600 transition hover:text-blue-700">
                Home
            </a>

            <a href="#rooms"
               class="text-sm font-medium text-slate-600 transition hover:text-blue-700">
                Rooms
            </a>

            <a href="#schedule"
               class="text-sm font-medium text-slate-600 transition hover:text-blue-700">
                Schedule
            </a>

            <a href="#how-it-works"
               class="text-sm font-medium text-slate-600 transition hover:text-blue-700">
                How It Works
            </a>
        </nav>

        <!-- Desktop CTA -->
        <div class="hidden lg:block">
            <a href="#availability"
               class="inline-flex items-center gap-2 rounded-xl bg-slate-950 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 hover:shadow-md">
                <i data-lucide="calendar-plus" class="h-4 w-4"></i>
                Book a Room
            </a>
        </div>

        <!-- Mobile Button -->
        <button
            type="button"
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 text-slate-700 transition hover:bg-slate-50 lg:hidden"
            aria-label="Toggle navigation menu"
        >
            <i x-show="!mobileMenuOpen" data-lucide="menu" class="h-5 w-5"></i>
            <i x-show="mobileMenuOpen" x-cloak data-lucide="x" class="h-5 w-5"></i>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div
        x-show="mobileMenuOpen"
        x-cloak
        x-transition
        class="border-t border-slate-200 bg-white lg:hidden"
    >
        <nav class="mx-auto flex max-w-7xl flex-col px-5 py-5 sm:px-6">
            <a @click="mobileMenuOpen = false"
               href="#home"
               class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50">
                Home
            </a>

            <a @click="mobileMenuOpen = false"
               href="#rooms"
               class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50">
                Rooms
            </a>

            <a @click="mobileMenuOpen = false"
               href="#schedule"
               class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50">
                Schedule
            </a>

            <a @click="mobileMenuOpen = false"
               href="#how-it-works"
               class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50">
                How It Works
            </a>

            <a @click="mobileMenuOpen = false"
               href="#availability"
               class="mt-3 inline-flex items-center justify-center gap-2 rounded-xl bg-slate-950 px-5 py-3 text-sm font-semibold text-white">
                <i data-lucide="calendar-plus" class="h-4 w-4"></i>
                Book a Room
            </a>
        </nav>
    </div>
</header>

<main>

    <!-- =====================================================
        HERO SECTION
    ====================================================== -->
    <section id="home" class="relative overflow-hidden bg-slate-50">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-blue-100/60 blur-3xl"></div>
            <div class="absolute -bottom-40 left-0 h-[400px] w-[400px] rounded-full bg-indigo-50 blur-3xl"></div>
        </div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-14 px-5 py-20 sm:px-6 sm:py-24 lg:grid-cols-2 lg:px-8 lg:py-28">

            <!-- Hero Content -->
            <div class="max-w-2xl">

                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-4 py-2 text-xs font-semibold text-blue-700">
                    <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                    Simple room booking for students
                </div>

                <h1 class="text-4xl font-bold leading-tight tracking-tight text-slate-950 sm:text-5xl lg:text-6xl">
                    Find a Room.
                    <span class="block text-blue-700">
                        Book Your Space.
                    </span>
                </h1>

                <p class="mt-6 max-w-xl text-base leading-7 text-slate-600 sm:text-lg">
                    Find suitable discussion rooms, check availability and reserve your preferred time without complicated booking processes.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="#availability"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-slate-950 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-md">
                        <i data-lucide="calendar-plus" class="h-4 w-4"></i>
                        Book a Room
                    </a>

                    <a href="#schedule"
                       class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 bg-white px-6 py-3.5 text-sm font-semibold text-slate-700 transition hover:border-slate-400 hover:bg-slate-50">
                        <i data-lucide="calendar-days" class="h-4 w-4"></i>
                        View Schedule
                    </a>
                </div>

                <div class="mt-10 flex flex-wrap gap-x-8 gap-y-4 border-t border-slate-200 pt-7">

                    <div class="flex items-center gap-2 text-sm text-slate-600">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-white shadow-sm">
                            <i data-lucide="search" class="h-4 w-4 text-blue-700"></i>
                        </div>
                        Find rooms quickly
                    </div>

                    <div class="flex items-center gap-2 text-sm text-slate-600">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-white shadow-sm">
                            <i data-lucide="clock-3" class="h-4 w-4 text-blue-700"></i>
                        </div>
                        Check time slots
                    </div>

                    <div class="flex items-center gap-2 text-sm text-slate-600">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-white shadow-sm">
                            <i data-lucide="check-circle-2" class="h-4 w-4 text-blue-700"></i>
                        </div>
                        Book easily
                    </div>

                </div>
            </div>

            <!-- Hero UI Mockup -->
            <div class="relative lg:pl-6">

                <div class="absolute -left-4 top-12 hidden h-32 w-32 rounded-full bg-blue-200/50 blur-3xl lg:block"></div>

                <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft">

                    <!-- Mockup Header -->
                    <div class="flex items-center justify-between border-b border-slate-100 px-6 py-5">
                        <div>
                            <p class="text-xs font-medium uppercase tracking-[0.18em] text-slate-400">
                                Room Details
                            </p>
                            <h3 class="mt-1 text-lg font-bold text-slate-900">
                                Discussion Room 02
                            </h3>
                        </div>

                        <span class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                            Available
                        </span>
                    </div>

                    <!-- Room Meta -->
                    <div class="grid grid-cols-2 gap-4 border-b border-slate-100 px-6 py-5 sm:grid-cols-3">

                        <div>
                            <div class="flex items-center gap-2 text-xs text-slate-400">
                                <i data-lucide="map-pin" class="h-3.5 w-3.5"></i>
                                Location
                            </div>
                            <p class="mt-1 text-sm font-semibold text-slate-700">
                                Level 2
                            </p>
                        </div>

                        <div>
                            <div class="flex items-center gap-2 text-xs text-slate-400">
                                <i data-lucide="users" class="h-3.5 w-3.5"></i>
                                Capacity
                            </div>
                            <p class="mt-1 text-sm font-semibold text-slate-700">
                                8 people
                            </p>
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <div class="flex items-center gap-2 text-xs text-slate-400">
                                <i data-lucide="monitor" class="h-3.5 w-3.5"></i>
                                Facility
                            </div>
                            <p class="mt-1 text-sm font-semibold text-slate-700">
                                Smart TV
                            </p>
                        </div>

                    </div>

                    <!-- Schedule -->
                    <div class="p-6">
                        <div class="mb-5 flex items-center justify-between">
                            <div>
                                <p class="text-sm font-semibold text-slate-900">
                                    Today's Schedule
                                </p>
                                <p class="mt-0.5 text-xs text-slate-400">
                                    Monday, 14 September
                                </p>
                            </div>

                            <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-slate-50 text-slate-500">
                                <i data-lucide="calendar" class="h-4 w-4"></i>
                            </div>
                        </div>

                        <div class="space-y-3">

                            <div class="flex items-center justify-between rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">
                                        10:00 AM - 12:00 PM
                                    </p>
                                    <p class="mt-0.5 text-xs text-slate-400">
                                        Student Discussion
                                    </p>
                                </div>

                                <span class="rounded-lg bg-slate-200 px-2.5 py-1 text-xs font-semibold text-slate-600">
                                    Booked
                                </span>
                            </div>

                            <div class="flex items-center justify-between rounded-xl border border-blue-100 bg-blue-50/70 px-4 py-3">
                                <div>
                                    <p class="text-sm font-semibold text-slate-800">
                                        12:00 PM - 02:00 PM
                                    </p>
                                    <p class="mt-0.5 text-xs text-blue-600">
                                        Open for booking
                                    </p>
                                </div>

                                <span class="rounded-lg bg-white px-2.5 py-1 text-xs font-semibold text-blue-700 shadow-sm">
                                    Available
                                </span>
                            </div>

                            <div class="flex items-center justify-between rounded-xl border border-blue-100 bg-blue-50/70 px-4 py-3">
                                <div>
                                    <p class="text-sm font-semibold text-slate-800">
                                        02:00 PM - 04:00 PM
                                    </p>
                                    <p class="mt-0.5 text-xs text-blue-600">
                                        Open for booking
                                    </p>
                                </div>

                                <span class="rounded-lg bg-white px-2.5 py-1 text-xs font-semibold text-blue-700 shadow-sm">
                                    Available
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Floating Card -->
                <div class="absolute -bottom-7 -left-5 hidden w-48 rounded-2xl border border-slate-200 bg-white p-4 shadow-card sm:block">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50">
                            <i data-lucide="clock-3" class="h-5 w-5 text-blue-700"></i>
                        </div>

                        <div>
                            <p class="text-xs text-slate-400">Next available</p>
                            <p class="text-sm font-bold text-slate-800">12:00 PM</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =====================================================
        QUICK AVAILABILITY
    ====================================================== -->
    <section id="availability" class="relative z-10 -mt-2 pb-24 pt-14">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft">

                <div class="border-b border-slate-100 px-6 py-6 sm:px-8">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-blue-700">
                                Quick Availability
                            </p>
                            <h2 class="mt-2 text-2xl font-bold tracking-tight text-slate-950">
                                Find an available room
                            </h2>
                        </div>

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-700">
                            <i data-lucide="search" class="h-5 w-5"></i>
                        </div>

                    </div>
                </div>

                <form onsubmit="event.preventDefault();" class="grid gap-5 px-6 py-7 sm:px-8 lg:grid-cols-12 lg:items-end">

                    <!-- Date -->
                    <div class="lg:col-span-3">
                        <label for="date" class="mb-2 block text-sm font-semibold text-slate-700">
                            Date
                        </label>

                        <div class="relative">
                            <i data-lucide="calendar-days"
                               class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400">
                            </i>

                            <input
                                id="date"
                                name="date"
                                type="date"
                                class="h-12 w-full rounded-xl border border-slate-200 bg-white pl-11 pr-4 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                            >
                        </div>
                    </div>

                    <!-- Start Time -->
                    <div class="lg:col-span-2">
                        <label for="start_time" class="mb-2 block text-sm font-semibold text-slate-700">
                            Start Time
                        </label>

                        <input
                            id="start_time"
                            name="start_time"
                            type="time"
                            class="h-12 w-full rounded-xl border border-slate-200 bg-white px-4 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                        >
                    </div>

                    <!-- End Time -->
                    <div class="lg:col-span-2">
                        <label for="end_time" class="mb-2 block text-sm font-semibold text-slate-700">
                            End Time
                        </label>

                        <input
                            id="end_time"
                            name="end_time"
                            type="time"
                            class="h-12 w-full rounded-xl border border-slate-200 bg-white px-4 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                        >
                    </div>

                    <!-- Participants -->
                    <div class="lg:col-span-2">
                        <label for="participants" class="mb-2 block text-sm font-semibold text-slate-700">
                            Participants
                        </label>

                        <div class="relative">
                            <i data-lucide="users"
                               class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400">
                            </i>

                            <input
                                id="participants"
                                name="participants"
                                type="number"
                                min="1"
                                max="30"
                                placeholder="e.g. 6"
                                class="h-12 w-full rounded-xl border border-slate-200 bg-white pl-11 pr-4 text-sm text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                            >
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="lg:col-span-3">
                        <button
                            type="submit"
                            class="flex h-12 w-full items-center justify-center gap-2 rounded-xl bg-blue-700 px-5 text-sm font-semibold text-white transition hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-200"
                        >
                            <i data-lucide="search" class="h-4 w-4"></i>
                            Check Availability
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </section>

    <!-- =====================================================
        AVAILABLE ROOMS
    ====================================================== -->
    <section id="rooms" class="bg-slate-50 py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-blue-700">
                        Rooms
                    </p>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                        Available discussion spaces
                    </h2>

                    <p class="mt-4 max-w-2xl text-base leading-7 text-slate-600">
                        Choose a room based on your group size and the facilities required for your discussion.
                    </p>
                </div>

                <a href="#availability"
                   class="inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-blue-700 transition hover:text-blue-900">
                    Check other times
                    <i data-lucide="arrow-right" class="h-4 w-4"></i>
                </a>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">

                <!-- Room 1 -->
                <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">

                    <div class="flex h-44 items-center justify-center bg-slate-100">
                        <div class="flex h-20 w-20 items-center justify-center rounded-3xl border border-white bg-white/90 text-slate-700 shadow-sm transition group-hover:scale-105">
                            <i data-lucide="presentation" class="h-9 w-9"></i>
                        </div>
                    </div>

                    <div class="p-6">

                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">
                                    Discussion Room 01
                                </h3>

                                <div class="mt-2 flex items-center gap-1.5 text-sm text-slate-500">
                                    <i data-lucide="map-pin" class="h-4 w-4"></i>
                                    Level 1
                                </div>
                            </div>

                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                Available
                            </span>
                        </div>

                        <div class="mt-5 flex items-center gap-2 border-b border-slate-100 pb-5 text-sm font-medium text-slate-600">
                            <i data-lucide="users" class="h-4 w-4 text-slate-400"></i>
                            Capacity 6
                        </div>

                        <div class="mt-5">
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                Facilities
                            </p>

                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                    Whiteboard
                                </span>
                                <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                    Display
                                </span>
                            </div>
                        </div>

                        <button
                            type="button"
                            class="mt-6 flex w-full items-center justify-center gap-2 rounded-xl border border-slate-200 px-4 py-3 text-sm font-semibold text-slate-700 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-700"
                        >
                            View Room
                            <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                        </button>

                    </div>
                </article>

                <!-- Room 2 -->
                <article class="group overflow-hidden rounded-2xl border border-blue-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">

                    <div class="relative flex h-44 items-center justify-center bg-blue-50">

                        <div class="absolute right-4 top-4 rounded-full bg-blue-700 px-3 py-1.5 text-xs font-semibold text-white">
                            Popular
                        </div>

                        <div class="flex h-20 w-20 items-center justify-center rounded-3xl border border-white bg-white/90 text-blue-700 shadow-sm transition group-hover:scale-105">
                            <i data-lucide="monitor-up" class="h-9 w-9"></i>
                        </div>

                    </div>

                    <div class="p-6">

                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">
                                    Discussion Room 02
                                </h3>

                                <div class="mt-2 flex items-center gap-1.5 text-sm text-slate-500">
                                    <i data-lucide="map-pin" class="h-4 w-4"></i>
                                    Level 2
                                </div>
                            </div>

                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                Available
                            </span>
                        </div>

                        <div class="mt-5 flex items-center gap-2 border-b border-slate-100 pb-5 text-sm font-medium text-slate-600">
                            <i data-lucide="users" class="h-4 w-4 text-slate-400"></i>
                            Capacity 8
                        </div>

                        <div class="mt-5">
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                Facilities
                            </p>

                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                    Smart TV
                                </span>
                                <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                    Whiteboard
                                </span>
                            </div>
                        </div>

                        <button
                            type="button"
                            class="mt-6 flex w-full items-center justify-center gap-2 rounded-xl bg-blue-700 px-4 py-3 text-sm font-semibold text-white transition hover:bg-blue-800"
                        >
                            View Room
                            <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                        </button>

                    </div>
                </article>

                <!-- Room 3 -->
                <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">

                    <div class="flex h-44 items-center justify-center bg-slate-100">
                        <div class="flex h-20 w-20 items-center justify-center rounded-3xl border border-white bg-white/90 text-slate-700 shadow-sm transition group-hover:scale-105">
                            <i data-lucide="video" class="h-9 w-9"></i>
                        </div>
                    </div>

                    <div class="p-6">

                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">
                                    Meeting Room A
                                </h3>

                                <div class="mt-2 flex items-center gap-1.5 text-sm text-slate-500">
                                    <i data-lucide="map-pin" class="h-4 w-4"></i>
                                    Level 3
                                </div>
                            </div>

                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                Available
                            </span>
                        </div>

                        <div class="mt-5 flex items-center gap-2 border-b border-slate-100 pb-5 text-sm font-medium text-slate-600">
                            <i data-lucide="users" class="h-4 w-4 text-slate-400"></i>
                            Capacity 12
                        </div>

                        <div class="mt-5">
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                Facilities
                            </p>

                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                    Projector
                                </span>
                                <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                    Video Conference
                                </span>
                            </div>
                        </div>

                        <button
                            type="button"
                            class="mt-6 flex w-full items-center justify-center gap-2 rounded-xl border border-slate-200 px-4 py-3 text-sm font-semibold text-slate-700 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-700"
                        >
                            View Room
                            <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                        </button>

                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- =====================================================
        SCHEDULE / CALENDAR PREVIEW
    ====================================================== -->
    <section id="schedule" class="py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.4fr] lg:items-center">

                <!-- Schedule Intro -->
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-blue-700">
                        Schedule
                    </p>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                        Know when every room is in use.
                    </h2>

                    <p class="mt-5 max-w-lg text-base leading-7 text-slate-600">
                        Review room bookings at a glance and identify open time slots before making your reservation.
                    </p>

                    <a href="#schedule"
                       class="mt-8 inline-flex items-center gap-2 rounded-xl bg-slate-950 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">
                        <i data-lucide="calendar-days" class="h-4 w-4"></i>
                        View Full Schedule
                    </a>
                </div>

                <!-- Calendar Mockup -->
                <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft">

                    <!-- Calendar Top -->
                    <div class="flex flex-col gap-4 border-b border-slate-100 px-5 py-5 sm:flex-row sm:items-center sm:justify-between sm:px-6">

                        <div>
                            <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                Weekly Schedule
                            </p>
                            <h3 class="mt-1 font-bold text-slate-900">
                                14 - 18 September 2026
                            </h3>
                        </div>

                        <div class="flex items-center gap-2">
                            <button
                                type="button"
                                class="flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-500 transition hover:bg-slate-50"
                            >
                                <i data-lucide="chevron-left" class="h-4 w-4"></i>
                            </button>

                            <button
                                type="button"
                                class="rounded-lg border border-slate-200 px-4 py-2 text-xs font-semibold text-slate-600 transition hover:bg-slate-50"
                            >
                                Today
                            </button>

                            <button
                                type="button"
                                class="flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-500 transition hover:bg-slate-50"
                            >
                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Desktop Calendar -->
                    <div class="hidden overflow-x-auto sm:block">
                        <div class="min-w-[650px]">

                            <div class="grid grid-cols-[70px_repeat(5,1fr)] border-b border-slate-100 bg-slate-50">

                                <div class="p-4"></div>

                                <div class="border-l border-slate-100 p-4 text-center">
                                    <p class="text-xs font-medium text-slate-400">MON</p>
                                    <p class="mt-1 font-bold text-blue-700">14</p>
                                </div>

                                <div class="border-l border-slate-100 p-4 text-center">
                                    <p class="text-xs font-medium text-slate-400">TUE</p>
                                    <p class="mt-1 font-bold text-slate-700">15</p>
                                </div>

                                <div class="border-l border-slate-100 p-4 text-center">
                                    <p class="text-xs font-medium text-slate-400">WED</p>
                                    <p class="mt-1 font-bold text-slate-700">16</p>
                                </div>

                                <div class="border-l border-slate-100 p-4 text-center">
                                    <p class="text-xs font-medium text-slate-400">THU</p>
                                    <p class="mt-1 font-bold text-slate-700">17</p>
                                </div>

                                <div class="border-l border-slate-100 p-4 text-center">
                                    <p class="text-xs font-medium text-slate-400">FRI</p>
                                    <p class="mt-1 font-bold text-slate-700">18</p>
                                </div>

                            </div>

                            <!-- 10:00 -->
                            <div class="grid min-h-[105px] grid-cols-[70px_repeat(5,1fr)] border-b border-slate-100">

                                <div class="px-3 py-4 text-xs font-medium text-slate-400">
                                    10:00
                                </div>

                                <div class="border-l border-slate-100 p-2">
                                    <div class="rounded-lg border-l-4 border-blue-600 bg-blue-50 p-3">
                                        <p class="text-xs font-bold text-blue-800">
                                            Discussion Room 01
                                        </p>
                                        <p class="mt-1 text-[11px] text-blue-600">
                                            10:00 - 12:00
                                        </p>
                                    </div>
                                </div>

                                <div class="border-l border-slate-100 p-2"></div>
                                <div class="border-l border-slate-100 p-2"></div>

                                <div class="border-l border-slate-100 p-2">
                                    <div class="rounded-lg border-l-4 border-indigo-500 bg-indigo-50 p-3">
                                        <p class="text-xs font-bold text-indigo-800">
                                            Room 02
                                        </p>
                                        <p class="mt-1 text-[11px] text-indigo-600">
                                            10:00 - 11:00
                                        </p>
                                    </div>
                                </div>

                                <div class="border-l border-slate-100 p-2"></div>

                            </div>

                            <!-- 12:00 -->
                            <div class="grid min-h-[105px] grid-cols-[70px_repeat(5,1fr)] border-b border-slate-100">

                                <div class="px-3 py-4 text-xs font-medium text-slate-400">
                                    12:00
                                </div>

                                <div class="border-l border-slate-100 p-2"></div>
                                <div class="border-l border-slate-100 p-2"></div>

                                <div class="border-l border-slate-100 p-2">
                                    <div class="rounded-lg border-l-4 border-slate-500 bg-slate-100 p-3">
                                        <p class="text-xs font-bold text-slate-700">
                                            Meeting Room A
                                        </p>
                                        <p class="mt-1 text-[11px] text-slate-500">
                                            12:00 - 14:00
                                        </p>
                                    </div>
                                </div>

                                <div class="border-l border-slate-100 p-2"></div>
                                <div class="border-l border-slate-100 p-2"></div>

                            </div>

                            <!-- 14:00 -->
                            <div class="grid min-h-[105px] grid-cols-[70px_repeat(5,1fr)]">

                                <div class="px-3 py-4 text-xs font-medium text-slate-400">
                                    14:00
                                </div>

                                <div class="border-l border-slate-100 p-2">
                                    <div class="rounded-lg border-l-4 border-cyan-500 bg-cyan-50 p-3">
                                        <p class="text-xs font-bold text-cyan-800">
                                            Meeting Room A
                                        </p>
                                        <p class="mt-1 text-[11px] text-cyan-600">
                                            14:00 - 16:00
                                        </p>
                                    </div>
                                </div>

                                <div class="border-l border-slate-100 p-2">
                                    <div class="rounded-lg border-l-4 border-blue-600 bg-blue-50 p-3">
                                        <p class="text-xs font-bold text-blue-800">
                                            Discussion Room 01
                                        </p>
                                        <p class="mt-1 text-[11px] text-blue-600">
                                            14:00 - 15:00
                                        </p>
                                    </div>
                                </div>

                                <div class="border-l border-slate-100 p-2"></div>
                                <div class="border-l border-slate-100 p-2"></div>

                                <div class="border-l border-slate-100 p-2">
                                    <div class="rounded-lg border-l-4 border-indigo-500 bg-indigo-50 p-3">
                                        <p class="text-xs font-bold text-indigo-800">
                                            Room 02
                                        </p>
                                        <p class="mt-1 text-[11px] text-indigo-600">
                                            14:00 - 16:00
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Mobile Schedule -->
                    <div class="space-y-3 p-5 sm:hidden">

                        <div class="flex gap-3 rounded-xl border border-slate-200 p-4">
                            <div class="flex h-10 w-10 shrink-0 flex-col items-center justify-center rounded-lg bg-blue-50">
                                <span class="text-[9px] font-bold text-blue-600">MON</span>
                                <span class="text-sm font-bold text-blue-800">14</span>
                            </div>

                            <div>
                                <p class="text-sm font-bold text-slate-800">Discussion Room 01</p>
                                <p class="mt-1 text-xs text-slate-500">10:00 AM - 12:00 PM</p>
                            </div>
                        </div>

                        <div class="flex gap-3 rounded-xl border border-slate-200 p-4">
                            <div class="flex h-10 w-10 shrink-0 flex-col items-center justify-center rounded-lg bg-blue-50">
                                <span class="text-[9px] font-bold text-blue-600">MON</span>
                                <span class="text-sm font-bold text-blue-800">14</span>
                            </div>

                            <div>
                                <p class="text-sm font-bold text-slate-800">Meeting Room A</p>
                                <p class="mt-1 text-xs text-slate-500">02:00 PM - 04:00 PM</p>
                            </div>
                        </div>

                        <div class="flex gap-3 rounded-xl border border-slate-200 p-4">
                            <div class="flex h-10 w-10 shrink-0 flex-col items-center justify-center rounded-lg bg-slate-100">
                                <span class="text-[9px] font-bold text-slate-500">TUE</span>
                                <span class="text-sm font-bold text-slate-700">15</span>
                            </div>

                            <div>
                                <p class="text-sm font-bold text-slate-800">Discussion Room 01</p>
                                <p class="mt-1 text-xs text-slate-500">02:00 PM - 03:00 PM</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
        HOW IT WORKS
    ====================================================== -->
    <section id="how-it-works" class="bg-slate-950 py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-blue-400">
                    How It Works
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Book your room in three steps
                </h2>

                <p class="mt-4 text-base leading-7 text-slate-400">
                    A straightforward booking process designed to get your discussion started quickly.
                </p>
            </div>

            <div class="relative mt-14 grid gap-6 md:grid-cols-3">

                <!-- Connector -->
                <div class="absolute left-[17%] right-[17%] top-10 hidden border-t border-dashed border-slate-700 md:block"></div>

                <!-- Step 1 -->
                <div class="relative text-center">
                    <div class="relative mx-auto flex h-20 w-20 items-center justify-center rounded-2xl border border-slate-700 bg-slate-900 text-blue-400 shadow-lg">
                        <i data-lucide="door-open" class="h-7 w-7"></i>

                        <span class="absolute -right-2 -top-2 flex h-7 w-7 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white ring-4 ring-slate-950">
                            1
                        </span>
                    </div>

                    <h3 class="mt-6 text-lg font-bold text-white">
                        Choose a Room
                    </h3>

                    <p class="mx-auto mt-2 max-w-xs text-sm leading-6 text-slate-400">
                        Find a room that fits your group and required facilities.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="relative text-center">
                    <div class="relative mx-auto flex h-20 w-20 items-center justify-center rounded-2xl border border-slate-700 bg-slate-900 text-blue-400 shadow-lg">
                        <i data-lucide="calendar-clock" class="h-7 w-7"></i>

                        <span class="absolute -right-2 -top-2 flex h-7 w-7 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white ring-4 ring-slate-950">
                            2
                        </span>
                    </div>

                    <h3 class="mt-6 text-lg font-bold text-white">
                        Select Date & Time
                    </h3>

                    <p class="mx-auto mt-2 max-w-xs text-sm leading-6 text-slate-400">
                        Check available slots and choose the most suitable time.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="relative text-center">
                    <div class="relative mx-auto flex h-20 w-20 items-center justify-center rounded-2xl border border-slate-700 bg-slate-900 text-blue-400 shadow-lg">
                        <i data-lucide="badge-check" class="h-7 w-7"></i>

                        <span class="absolute -right-2 -top-2 flex h-7 w-7 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white ring-4 ring-slate-950">
                            3
                        </span>
                    </div>

                    <h3 class="mt-6 text-lg font-bold text-white">
                        Confirm Booking
                    </h3>

                    <p class="mx-auto mt-2 max-w-xs text-sm leading-6 text-slate-400">
                        Review your details and secure the selected room.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- =====================================================
        FEATURES
    ====================================================== -->
    <section class="py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr] lg:items-center">

                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-blue-700">
                        Built for convenience
                    </p>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950">
                        Everything you need to plan your discussion.
                    </h2>

                    <p class="mt-4 max-w-lg text-base leading-7 text-slate-600">
                        RoomBook keeps the booking process clear, fast and easy to understand from the moment you search for a room.
                    </p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-blue-200 hover:shadow-card">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-700">
                            <i data-lucide="activity" class="h-5 w-5"></i>
                        </div>

                        <h3 class="mt-4 font-bold text-slate-900">
                            Real-time Availability
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Quickly identify open rooms and available booking slots.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-blue-200 hover:shadow-card">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-700">
                            <i data-lucide="mouse-pointer-click" class="h-5 w-5"></i>
                        </div>

                        <h3 class="mt-4 font-bold text-slate-900">
                            Easy Booking
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Reserve a discussion space through a simple booking flow.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-blue-200 hover:shadow-card">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-700">
                            <i data-lucide="calendar-range" class="h-5 w-5"></i>
                        </div>

                        <h3 class="mt-4 font-bold text-slate-900">
                            Clear Schedule
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            See upcoming bookings in a structured calendar view.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-blue-200 hover:shadow-card">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-700">
                            <i data-lucide="info" class="h-5 w-5"></i>
                        </div>

                        <h3 class="mt-4 font-bold text-slate-900">
                            Room Information
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Compare capacity, location and facilities before booking.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
        CTA
    ====================================================== -->
    <section class="px-5 pb-24 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">

            <div class="relative overflow-hidden rounded-3xl bg-blue-700 px-6 py-14 shadow-soft sm:px-10 lg:px-14">

                <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full border-[45px] border-white/5"></div>
                <div class="absolute -bottom-32 right-32 h-64 w-64 rounded-full bg-blue-500/30 blur-3xl"></div>

                <div class="relative flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">

                    <div class="max-w-2xl">
                        <p class="text-sm font-semibold text-blue-200">
                            Ready when you are.
                        </p>

                        <h2 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                            Need a space for your next discussion?
                        </h2>

                        <p class="mt-4 max-w-xl text-base leading-7 text-blue-100">
                            Check room availability and reserve a suitable space for your group.
                        </p>
                    </div>

                    <a href="#availability"
                       class="inline-flex shrink-0 items-center justify-center gap-2 self-start rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-blue-700 shadow-sm transition hover:-translate-y-0.5 hover:bg-blue-50 lg:self-auto">
                        Find a Room
                        <i data-lucide="arrow-right" class="h-4 w-4"></i>
                    </a>

                </div>

            </div>
        </div>
    </section>

</main>

<!-- =========================================================
    FOOTER
========================================================= -->
<footer class="border-t border-slate-200 bg-slate-50">
    <div class="mx-auto max-w-7xl px-5 py-10 sm:px-6 lg:px-8">

        <div class="flex flex-col gap-8 sm:flex-row sm:items-center sm:justify-between">

            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-950 text-white">
                    <i data-lucide="door-open" class="h-5 w-5"></i>
                </div>

                <div>
                    <p class="font-bold text-slate-900">
                        RoomBook
                    </p>
                    <p class="text-xs text-slate-500">
                        Discussion Room Booking System
                    </p>
                </div>
            </div>

            <nav class="flex flex-wrap gap-x-6 gap-y-3 text-sm font-medium text-slate-500">
                <a href="#rooms" class="transition hover:text-blue-700">
                    Rooms
                </a>

                <a href="#schedule" class="transition hover:text-blue-700">
                    Schedule
                </a>

                <a href="#how-it-works" class="transition hover:text-blue-700">
                    Booking Guide
                </a>
            </nav>

        </div>

        <div class="mt-8 flex flex-col gap-3 border-t border-slate-200 pt-6 text-xs text-slate-400 sm:flex-row sm:items-center sm:justify-between">
            <p>
                © 2026 RoomBook. All rights reserved.
            </p>

            <p>
                Discussion Room Booking System
            </p>
        </div>

    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        lucide.createIcons();
    });

    document.addEventListener('alpine:initialized', function () {
        lucide.createIcons();
    });
</script>

</body>
</html>
