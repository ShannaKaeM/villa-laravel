# Villas Feature

## Structure
```
Villas/
├── api/
│   ├── ListingController.php     # Villa CRUD operations
│   ├── SearchController.php      # Search and filters
│   ├── PhotoController.php       # Photo management
│   └── MaintenanceController.php # Maintenance requests
├── components/
│   ├── Public/
│   │   ├── ListingCard.vue      # Villa card display
│   │   ├── SearchFilters.vue    # Public search interface
│   │   ├── PhotoGallery.vue     # Public photo display
│   │   └── InquiryForm.vue      # Contact form
│   └── Portal/
│       ├── VillaManager.vue     # Owner's villa management
│       ├── PhotoUpload.vue      # Photo management
│       ├── MaintenanceForm.vue  # Maintenance requests
│       └── BookingCalendar.vue  # Availability management
└── views/
    ├── public/
    │   ├── index.blade.php      # Listings page
    │   └── show.blade.php       # Single villa
    └── portal/
        ├── manage.blade.php     # Owner's management view
        └── edit.blade.php       # Edit villa details

```

## Data Model

### Villa Model
```php
Villa {
    // Basic Info
    unit_number: string
    display_name: string (max 4 words)
    description: text (1-2 paragraphs)
    
    // Owner Info (repeatable)
    owners: [
        {
            full_name: string
            company: string (optional)
            phone: string
            email: string
            billing_address: text
        }
    ]
    
    // Media
    featured_image: string
    gallery_images: array (max 10)
    floorplan_image: string (optional)
    
    // Status
    is_featured: boolean
    for_rent: boolean
    for_sale: boolean
    
    // Specifications
    bedrooms: enum(1,2,3)
    bathrooms: enum(1,2,3)
    floorplan_type: enum(1.1,1.2,2.1,2.2,2.3,3.1,3.2)
    floor_level: enum(1st,2nd,3rd,4th)
    stories: enum(1,2)
}
```

## Public Interface

### 1. Listings Page
- Toggle between Rentals/Sales
- Filterable Search:
  - Bedrooms
  - Floorplans
  - Views
  - Floor Level
  - Stories
- Grid display of villa cards
- Sort options
- Pagination

### 2. Single Villa Page
- Photo gallery
- Unit details
- Amenities list
- Contact form
- Availability calendar
- Similar units

## Portal Interface

### 1. Owner Features
- Manage villa details
- Update photos
- Set availability
- Handle inquiries
- View statistics
- Maintenance requests

### 2. Staff Features
- Process maintenance requests
- Update unit status
- Manage photos
- Generate reports

### 3. Admin Features
- Approve listings
- Manage featured units
- Access all units
- Generate reports

## Integration Points

### 1. With Auth Feature
- Owner verification
- Staff permissions
- Admin access

### 2. With Groups Feature
- Committee access
- Maintenance coordination

### 3. With Calendar Feature
- Availability management
- Maintenance scheduling

## Technical Requirements

### 1. Photo Management
- Auto-resize uploads
- Multiple upload support
- Gallery organization
- Default images

### 2. Search System
- Elastic Search integration
- Filter combinations
- Sort options
- Save searches

### 3. Maintenance System
- Request tracking
- Status updates
- Photo attachments
- Comment thread

## Implementation Phases

### Phase 1: Basic Structure
- [ ] Set up models and migrations
- [ ] Create basic CRUD operations
- [ ] Implement authentication
- [ ] Basic file uploads

### Phase 2: Public Interface
- [ ] Implement search and filters
- [ ] Build listing pages
- [ ] Create contact forms
- [ ] Set up photo gallery

### Phase 3: Portal Interface
- [ ] Owner dashboard
- [ ] Maintenance system
- [ ] Availability management
- [ ] Statistics and reports

### Phase 4: Enhancements
- [ ] Advanced search
- [ ] Automated notifications
- [ ] Analytics integration
- [ ] API optimization
