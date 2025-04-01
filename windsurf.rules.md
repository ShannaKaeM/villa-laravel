# Villa Capriani Windsurf Rules

## Directory Structure Rules

### Feature Module Structure
```markdown
app/Features/{FeatureName}/
├── Api/                    # API Controllers and Resources
│   ├── Controllers/       # RESTful API controllers
│   ├── Requests/         # Form requests and validation
│   ├── Resources/        # API resources and collections
│   └── routes.php        # API routes for this feature
├── Domain/               # Business Logic
│   ├── Models/          # Eloquent models
│   ├── Services/        # Business services
│   ├── Events/          # Domain events
│   └── Policies/        # Authorization policies
├── Infrastructure/       # External Services & Data
│   ├── Repositories/    # Data access layer
│   ├── Providers/       # Service providers
│   └── External/        # External service integrations
├── UI/                  # User Interface
│   ├── Web/            # Web controllers and views
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── routes.php
│   ├── Components/     # Vue.js components
│   │   ├── Public/    # Public-facing components
│   │   └── Portal/    # Admin/portal components
│   └── Views/         # Blade views
│       ├── public/    # Public templates
│       └── portal/    # Portal templates
└── Tests/             # Feature tests
    ├── Unit/
    ├── Integration/
    └── Feature/
```

## Naming Conventions

### Files and Directories
```markdown
- Features: PascalCase (e.g., Villas, Restaurant)
- Controllers: PascalCase + Controller (e.g., VillaController)
- Models: Singular PascalCase (e.g., Villa, MenuItem)
- Components: PascalCase.vue (e.g., VillaCard.vue)
- Views: kebab-case.blade.php (e.g., villa-details.blade.php)
```

### Routes
```markdown
- API: api/{feature}/{resource}
- Web: {feature}/{action}
- Portal: portal/{feature}/{action}
```

## Component Rules

### Vue Components
```markdown
- Each component must have a README.md
- Props must be typed
- Events must be documented
- Components must be registered in feature module
```

### Blade Components
```markdown
- Use x- prefix for custom components
- Document parameters in component class
- Include example usage in comments
```

## Integration Rules

### Feature Communication
```markdown
- Use Events for cross-feature communication
- Register feature providers in module
- Document dependencies in feature README
```

### Asset Organization
```markdown
resources/
├── js/
│   └── Features/          # JavaScript modules by feature
├── css/
│   └── Features/          # CSS/SCSS by feature
└── views/
    └── Features/          # Shared view components
```

## Testing Rules

### Test Organization
```markdown
- Unit tests for services and models
- Integration tests for repositories
- Feature tests for endpoints
- Browser tests for UI flows
```

### Test Naming
```markdown
- Unit: {Class}Test
- Feature: {Action}Test
- Browser: {Flow}Test
```

## Documentation Rules

### Required Documentation
```markdown
- Feature README.md
- API documentation
- Component documentation
- Integration guide
```

### Documentation Format
```markdown
# Component Name

## Purpose
Brief description

## Props
| Name | Type | Required | Description |
|------|------|----------|-------------|

## Events
| Name | Payload | Description |
|------|---------|-------------|

## Example Usage
```vue
<template>
  <!-- Example code -->
</template>
```
```

## Code Generation Templates

### Feature Scaffold
```markdown
- Generate feature structure
- Create base README
- Add route providers
- Register in composer.json
```

### Component Scaffold
```markdown
- Generate component file
- Create test file
- Add to feature index
- Generate documentation
```
