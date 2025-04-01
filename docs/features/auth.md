# Auth & User Management Feature

## Structure
```
Auth/
├── api/
│   ├── AuthController.php        # Login, logout, password reset
│   ├── UserController.php        # User CRUD operations
│   ├── RoleController.php        # Role management
│   └── PermissionController.php  # Permission management
├── components/
│   ├── LoginForm.vue            # Authentication forms
│   ├── UserProfile.vue          # Profile management
│   ├── RoleManager.vue          # Role assignment
│   └── PermissionMatrix.vue     # Permission management
└── views/
    ├── login.blade.php          # Login page
    ├── profile.blade.php        # User profile
    └── admin/
        ├── users.blade.php      # User management
        └── roles.blade.php      # Role management
```

## User Types & Roles

### 1. Staff Roles
```php
STAFF = [
    'MANAGER' => [
        'permissions' => [
            'manage_staff',
            'manage_maintenance',
            'manage_bookings',
            'manage_communications',
            'access_all_documents'
        ]
    ],
    'MAINTENANCE' => [
        'permissions' => [
            'view_maintenance_requests',
            'update_maintenance_status',
            'access_maintenance_docs'
        ]
    ],
    'RECEPTIONIST' => [
        'permissions' => [
            'manage_bookings',
            'view_guest_info',
            'send_communications'
        ]
    ]
]
```

### 2. Owner Roles
```php
OWNER_ROLES = [
    'BOD_MEMBER' => [
        'permissions' => [
            'access_bod_documents',
            'manage_strategic_planning',
            'approve_budgets'
        ]
    ],
    'COMMITTEE_CHAIR' => [
        'permissions' => [
            'manage_committee',
            'create_committee_events',
            'access_committee_docs'
        ]
    ],
    'COMMITTEE_MEMBER' => [
        'permissions' => [
            'view_committee_docs',
            'participate_committee'
        ]
    ],
    'OWNER' => [
        'permissions' => [
            'manage_villa',
            'view_documents',
            'participate_community'
        ]
    ]
]
```

### 3. Public Roles
```php
PUBLIC_ROLES = [
    'GUEST' => [
        'permissions' => [
            'view_public_listings',
            'make_booking_requests',
            'view_public_amenities'
        ]
    ]
]
```
