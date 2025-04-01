# Villa Capriani Features Structure

## Feature Organization

Each feature follows this structure:
```
FeatureName/
├── api/            # Controllers and API endpoints
├── components/     # Vue/JavaScript components
└── views/         # Blade templates
```

## Core Features

### 1. Home
```
Home/
├── api/
│   └── DashboardController.php    # Featured content, stats
├── components/
│   ├── FeaturedVillas.vue        # Featured listings carousel
│   ├── EventsPreview.vue         # Upcoming events
│   └── RestaurantTeaser.vue      # Restaurant highlights
└── views/
    └── index.blade.php           # Home page template
```

### 2. Villas
```
Villas/
├── api/
│   ├── ListingController.php     # Villa CRUD operations
│   ├── SearchController.php      # Search and filters
│   └── PhotoController.php       # Photo management
├── components/
│   ├── ListingCard.vue          # Villa card component
│   ├── SearchFilters.vue        # Search interface
│   ├── PhotoGallery.vue         # Photo display
│   └── BookingForm.vue          # Booking interface
└── views/
    ├── index.blade.php          # Listings page
    ├── show.blade.php           # Single villa
    └── edit.blade.php           # Edit form
```

### 3. Groups (Committees)
```
Groups/
├── api/
│   ├── GroupController.php      # Group management
│   ├── MemberController.php     # Member management
│   └── DocumentController.php   # Document handling
├── components/
│   ├── GroupCard.vue           # Group display
│   ├── MemberList.vue          # Member management
│   └── DocumentLibrary.vue     # Document interface
└── views/
    ├── index.blade.php         # Groups list
    └── show.blade.php          # Single group
```

### 4. Amenities
```
Amenities/
├── api/
│   ├── AmenityController.php    # Amenity management
│   └── BookingController.php    # Amenity booking
├── components/
│   ├── AmenityCard.vue         # Amenity display
│   └── BookingCalendar.vue     # Booking interface
└── views/
    ├── index.blade.php         # Amenities list
    └── show.blade.php          # Single amenity
```

### 5. Restaurant
```
Restaurant/
├── api/
│   ├── MenuController.php       # Menu management
│   ├── EventController.php      # Special events
│   └── ReservationController.php # Reservations
├── components/
│   ├── MenuDisplay.vue         # Menu interface
│   ├── EventCard.vue           # Event display
│   └── ReservationForm.vue     # Booking form
└── views/
    ├── index.blade.php         # Main page
    ├── menu.blade.php          # Menu page
    └── events.blade.php        # Events page
```

### 6. Calendar
```
Calendar/
├── api/
│   ├── EventController.php      # Event management
│   └── BookingController.php    # Booking management
├── components/
│   ├── CalendarView.vue        # Calendar display
│   ├── EventForm.vue           # Event creation
│   └── BookingWidget.vue       # Booking interface
└── views/
    ├── index.blade.php         # Calendar page
    └── event.blade.php         # Single event
```

### 7. Blog
```
Blog/
├── api/
│   ├── PostController.php       # Post management
│   └── CategoryController.php   # Category management
├── components/
│   ├── PostCard.vue            # Post display
│   ├── CategoryList.vue        # Category navigation
│   └── CommentSection.vue      # Comments
└── views/
    ├── index.blade.php         # Blog list
    └── show.blade.php          # Single post
```

### 8. About
```
About/
├── api/
│   ├── PageController.php       # Page management
│   └── ContactController.php    # Contact form
├── components/
│   ├── PageContent.vue         # Page display
│   └── ContactForm.vue         # Contact form
└── views/
    ├── index.blade.php         # About page
    ├── faq.blade.php           # FAQ page
    └── contact.blade.php       # Contact page
```
