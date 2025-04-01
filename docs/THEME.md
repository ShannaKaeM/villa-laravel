# Villa Capriani Theme Guide

## Color Palette

### Primary Colors (Coastal Teal)
> Used for main UI elements, headers, and primary actions
```css
primary-50:  #f4f7f7  /* Lightest teal, good for backgrounds */
primary-100: #e2ebeb
primary-200: #c8d9d9
primary-300: #a2bdbe
primary-400: #83a4a5
primary-500: #5a7f80  /* Main brand color */
primary-600: #4d6a6d
primary-700: #43585b
primary-800: #3c4c4e
primary-900: #354244
primary-950: #20292c  /* Darkest teal, good for text */
```

### Secondary Colors (Warm Sand)
> Used for accents, calls to action, and highlights
```css
secondary-50:  #f9f4f1  /* Lightest sand */
secondary-100: #ede1d8
secondary-200: #d7c6bb
secondary-300: #c79c84
secondary-400: #b78468
secondary-500: #a56f51  /* Main accent color */
secondary-600: #975d48
secondary-700: #7e493f
secondary-800: #683d38
secondary-900: #573330
secondary-950: #301918  /* Darkest sand */
```

### Natural Colors (Beach Stone)
> Used for neutral elements and backgrounds
```css
natural-50:  #f8f6f4  /* Lightest stone */
natural-100: #eeece6
natural-200: #dbd7cd
natural-300: #bbb1a0
natural-400: #ac9e8b
natural-500: #9b8974  /* Main neutral */
natural-600: #8e7a68
natural-700: #776557
natural-800: #62534a
natural-900: #50453e
natural-950: #2a2320  /* Darkest stone */
```

### Base Colors (Grayscale)
> Used for text, borders, and UI elements
```css
base-50:  #ffffff  /* Pure white */
base-100: #f6f6f6
base-200: #eeeeee
base-300: #d5d5d5
base-400: #a5a5a5
base-500: #8a8a8a  /* Main gray */
base-600: #6f6f6f
base-700: #545454
base-800: #393939
base-900: #1e1e1e
base-950: #000000  /* Pure black */
```

## Typography

### Font Family
- Primary Font: Montserrat
- Fallback: sans-serif

### Plugins
1. @tailwindcss/forms
2. @tailwindcss/typography
3. @tailwindcss/aspect-ratio

## Usage Guidelines

### Primary Colors
- Main navigation
- Headers
- Primary buttons
- Active states

### Secondary Colors
- Call-to-action buttons
- Highlights
- Important links
- Accent elements

### Natural Colors
- Backgrounds
- Cards
- Panels
- Dividers

### Base Colors
- Text
- Borders
- Icons
- Disabled states

## Example Combinations

### Buttons
- Primary: `bg-primary-500 text-white hover:bg-primary-600`
- Secondary: `bg-secondary-500 text-white hover:bg-secondary-600`
- Outline: `border-2 border-primary-500 text-primary-700 hover:bg-primary-50`

### Cards
- Default: `bg-white border border-base-200`
- Highlighted: `bg-natural-50 border border-natural-200`
- Featured: `bg-primary-50 border border-primary-200`

### Text
- Headers: `text-primary-900`
- Body: `text-base-700`
- Links: `text-secondary-600 hover:text-secondary-700`
- Muted: `text-base-500`
