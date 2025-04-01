# Villa Capriani Style Guide

## Color Scheme

### Natural (Stone)
- 50: #fafaf9 (Lightest)
- 100: #f5f5f4
- 200: #e7e5e4
- 300: #d6d3d1
- 400: #a8a29e
- 500: #78716c
- 600: #57534e
- 700: #44403c
- 800: #292524
- 900: #1c1917
- 950: #0c0a09 (Darkest)

### Primary (Sky Blue)
- 50: #f0f9ff (Lightest)
- 100: #e0f2fe
- 200: #bae6fd
- 300: #7dd3fc
- 400: #38bdf8
- 500: #0ea5e9
- 600: #0284c7
- 700: #0369a1
- 800: #075985
- 900: #0c4a6e
- 950: #082f49 (Darkest)

### Secondary (Rose)
- 50: #fff1f2 (Lightest)
- 100: #ffe4e6
- 200: #fecdd3
- 300: #fda4af
- 400: #fb7185
- 500: #f43f5e
- 600: #e11d48
- 700: #be123c
- 800: #9f1239
- 900: #881337
- 950: #4c0519 (Darkest)

### Base (Zinc)
- 50: #fafafa (Lightest)
- 100: #f4f4f5
- 200: #e4e4e7
- 300: #d4d4d8
- 400: #a1a1aa
- 500: #71717a
- 600: #52525b
- 700: #3f3f46
- 800: #27272a
- 900: #18181b
- 950: #09090b (Darkest)

## Typography

### Font Family
- Primary: Montserrat (300, 400, 500, 600, 700)

## Components

### Filter Section
```css
.mi-filter-section {
  @apply bg-natural-200 rounded-lg p-6 border border-base-100;
}

.mi-filter-group {
  @apply space-y-3;
}

.mi-filter-title {
  @apply text-natural-700 font-semibold;
}

.mi-filter-options {
  @apply flex flex-wrap gap-3;
}

.mi-filter-label {
  @apply inline-flex items-center;
}

.mi-filter-text {
  @apply ml-2 text-natural-600;
}
```

### Buttons
```css
.mi-button-primary {
  @apply bg-primary-600 text-white py-3 px-6 rounded-lg font-semibold
         hover:bg-primary-700 transform hover:-translate-y-0.5 transition-all
         hover:shadow-md;
}

.mi-button-secondary {
  @apply bg-secondary-400 text-white py-3 px-6 rounded-lg font-semibold
         hover:bg-secondary-500 transform hover:-translate-y-0.5 transition-all
         hover:shadow-md;
}

.mi-button-natural {
  @apply bg-natural-200 text-base-800 py-2 px-4 rounded-md font-semibold
         hover:bg-natural-200 transform hover:-translate-y-0.5 transition-all
         hover:shadow-md;
}

.mi-button-outline-natural {
  @apply border border-natural-100 text-natural-100 py-2 px-4 rounded-md font-semibold
         hover:bg-white/10 hover:text-natural-50 transform hover:-translate-y-0.5 transition-all
         hover:shadow-md;
}
```

### Form Elements
```css
.mi-form-radio {
  @apply appearance-none p-0 w-5 h-5 border rounded-full bg-white border-natural-300;
}

.mi-form-radio:checked {
  @apply bg-primary-500 border-primary-500;
}

.mi-form-radio:focus {
  @apply outline-2 outline-primary-500 outline-offset-2;
}

.mi-form-radio:checked::after {
  content: '';
  @apply block w-2 h-2 rounded-full bg-white m-[5px];
}
```

### Cards
```css
.mi-card {
  @apply bg-base-800 rounded-lg shadow-sm border border-base-700 overflow-hidden hover:shadow-xl transition-shadow relative;
}

.mi-card-content {
  @apply p-4 flex flex-col relative;
}

.mi-card-image-container {
  @apply relative;
}

.mi-card-image-overlay {
  @apply absolute inset-0 bg-black/20 z-10;
}

.mi-card-image {
  @apply w-full h-48 object-cover;
}

.mi-card-title {
  @apply text-lg font-semibold text-base-50 min-h-[3.5rem];
}
```

### Hero Buttons
```css
.mi-hero-button-secondary {
  @apply inline-flex items-center justify-center px-8 py-3 font-medium rounded-lg 
         text-natural-50 hover:text-natural-50 backdrop-blur-md bg-transparent 
         hover:bg-white/10 transition-all duration-300 border border-natural-50/50 
         hover:border-natural-50/80 uppercase;
}
```
