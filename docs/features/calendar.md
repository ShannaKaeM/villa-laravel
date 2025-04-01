# Calendar Feature (Events & Project Management)

## Structure
```
Calendar/
├── api/
│   ├── EventController.php     # Event management
│   ├── BookingController.php   # Reservation system
│   ├── ProjectController.php   # Project management
│   └── MeetingController.php   # Meeting coordination
├── components/
│   ├── Public/
│   │   ├── EventCalendar.vue  # Public event display
│   │   ├── EventCard.vue      # Event information
│   │   ├── BookingForm.vue    # Public reservations
│   │   └── FilterBar.vue      # Event filtering
│   └── Portal/
│       ├── ProjectBoard.vue    # Project management
│       ├── MeetingPlanner.vue  # Meeting scheduling
│       ├── TaskCalendar.vue   # Task management
│       └── ResourceBooking.vue # Resource scheduling
└── views/
    ├── public/
    │   ├── index.blade.php    # Public calendar
    │   ├── event.blade.php    # Single event
    │   └── booking.blade.php  # Booking form
    └── portal/
        ├── projects.blade.php  # Project management
        ├── meetings.blade.php  # Meeting calendar
        └── tasks.blade.php     # Task management
```

## Data Models

### Event Models
```php
Event {
    title: string
    description: text
    start_date: datetime
    end_date: datetime
    location: string
    type: enum(public, private, meeting, maintenance)
    visibility: enum(public, owners, staff, bod, committee)
    capacity: integer
    requires_booking: boolean
    group_id: integer
    created_by: integer
    status: enum(scheduled, cancelled, completed)
}

Booking {
    event_id: integer
    user_id: integer
    status: enum(pending, confirmed, cancelled)
    party_size: integer
    notes: text
    created_at: timestamp
}

Meeting {
    title: string
    description: text
    date: datetime
    duration: integer
    group_id: integer
    location: string
    type: enum(bod, committee, staff, all-hands)
    agenda: text
    minutes: text
    attendees: json
}

Project {
    title: string
    description: text
    start_date: date
    end_date: date
    status: enum(planning, active, completed, on-hold)
    group_id: integer
    priority: enum(low, medium, high)
    budget: decimal
    tasks: json
}
```

## Public Interface

### 1. Events Calendar
- Public events listing
- Filterable calendar
- Event details
- Booking system
- Location maps

### 2. Event Categories
- Community events
- Restaurant events
- Pool activities
- Special occasions
- Holiday celebrations

### 3. Booking System
- Event registration
- Capacity management
- Confirmation system
- Cancellation handling

## Portal Interface

### 1. Project Management
- Project timeline
- Task tracking
- Resource allocation
- Progress monitoring
- Budget tracking

### 2. Meeting Management
- Committee meetings
- BOD sessions
- Staff meetings
- Resource booking
- Agenda management

### 3. Internal Events
- Owner events
- Staff training
- Committee activities
- Maintenance schedule
- Property inspections

## Access Levels

### 1. Public Access
- View public events
- Make bookings
- See availability
- Basic event info

### 2. Owner Access
- View owner events
- Committee meetings
- Book amenities
- RSVP to events

### 3. Staff Access
- Manage events
- Handle bookings
- Update schedules
- Resource management

### 4. Admin Access
- Full calendar control
- Project management
- Meeting scheduling
- System settings

## Integration Points

### 1. With Auth Feature
- User permissions
- Group access
- Booking verification
- Admin controls

### 2. With Groups Feature
- Committee scheduling
- Team coordination
- Resource sharing
- Project management

### 3. With Blog Feature
- Event announcements
- Meeting summaries
- Project updates
- Community news

## Technical Requirements

### 1. Calendar System
- Multiple views (month, week, day, agenda)
- Recurring events
- Drag-and-drop interface
- Resource conflicts
- Time zone handling

### 2. Booking System
- Real-time availability
- Automatic confirmations
- Waitlist management
- Capacity control

### 3. Project Management
- Gantt charts
- Task dependencies
- Resource allocation
- Progress tracking

## Implementation Phases

### Phase 1: Public Calendar
- [ ] Basic event system
- [ ] Public calendar
- [ ] Simple bookings
- [ ] Event categories

### Phase 2: Internal Calendar
- [ ] Meeting management
- [ ] Project tracking
- [ ] Resource booking
- [ ] Team scheduling

### Phase 3: Enhanced Features
- [ ] Advanced booking
- [ ] Resource management
- [ ] Reporting tools
- [ ] Analytics

### Phase 4: Integration
- [ ] Mobile app
- [ ] Email notifications
- [ ] Calendar sync
- [ ] API access
