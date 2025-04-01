# Portal Feature - Dual Interface Management

## Structure
```
Portal/
├── api/
│   ├── DashboardController.php   # User-specific dashboards
│   ├── NotificationController.php # User notifications
│   └── PreferencesController.php  # User preferences
├── components/
│   ├── Dashboard/
│   │   ├── OwnerDashboard.vue    # Owner view
│   │   ├── StaffDashboard.vue    # Staff view
│   │   └── AdminDashboard.vue    # Admin view
│   └── Shared/
│       ├── NotificationCenter.vue # Notifications
│       └── UserMenu.vue          # User navigation
└── views/
    └── dashboard/
        ├── owner.blade.php       # Owner portal
        ├── staff.blade.php       # Staff portal
        └── admin.blade.php       # Admin portal
```

## Dual-Purpose Features

### 1. Villas Feature
```
Public Interface:
- View listings
- Search properties
- Make inquiries
- View amenities

Portal Interface:
- Manage villa details
- Update availability
- Handle maintenance
- Access documents
```

### 2. Groups/Committees Feature
```
Public Interface:
- View committee info
- See public updates
- Contact committees

Portal Interface:
- Manage members
- Schedule meetings
- Share documents
- Track projects
```

### 3. Calendar Feature
```
Public Interface:
- View public events
- See availability
- Make reservations

Portal Interface:
- Manage events
- Handle bookings
- Set schedules
- Coordinate maintenance
```

### 4. Restaurant Feature
```
Public Interface:
- View menu
- Make reservations
- See events

Portal Interface:
- Update menu
- Manage bookings
- Plan events
- Track inventory
```

## Role-Based Dashboards

### 1. Owner Dashboard
```
Components:
- Villa Management
- Maintenance Requests
- Document Library
- Committee Participation
- Community Updates
```

### 2. Staff Dashboard
```
Components:
- Task Management
- Maintenance Schedule
- Guest Services
- Property Updates
- Team Communication
```

### 3. BOD Dashboard
```
Components:
- Strategic Planning
- Budget Overview
- Document Approval
- Committee Oversight
- Community Metrics
```

## Shared Components

### 1. Notification System
```
Types:
- Maintenance Updates
- Document Alerts
- Meeting Reminders
- Community Announcements
- Personal Messages
```

### 2. Document Management
```
Categories:
- Personal Documents
- Committee Documents
- Property Records
- Meeting Minutes
- Community Policies
```

### 3. Communication Center
```
Features:
- Direct Messaging
- Group Discussions
- Announcement System
- Email Integration
- Contact Directory
```

## Integration Points

### 1. With Auth Feature
```
- User Authentication
- Role Management
- Permission Checking
- Profile Management
```

### 2. With Other Features
```
- Villa Management
- Committee Participation
- Event Calendar
- Restaurant Bookings
- Maintenance System
```
