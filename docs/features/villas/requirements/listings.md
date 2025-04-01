# Villa Listings Requirements

## Overview
> **Note**: The listings page serves as both a rental/sales platform and a unit directory for owners. We want to make it easy for guests to find units while giving owners good visibility into their property's presentation.

## Page Content

### Hero Section
- Title: "Welcome to Villa Capriani Listings"
- Description: Emphasizes private ownership and unique layouts
> **Note**: We want to highlight the personal touch of owner-managed units, different from typical resort rentals

### Search & Filter Panel
- Floor Level (1-4)
- Stories (1-2)
- Bathrooms (1-3)
- Bedrooms with Floorplans:
  * 1 Bedroom: Plans 1.1, 1.2
  * 2 Bedroom: Plans 2.1, 2.2, 2.3
  * 3 Bedroom: Plans 3.1, 3.2
> **Note**: The nested bedroom/floorplan structure is important for both renters and owners. Renters want to find similar units, owners want to compare with similar layouts.

### Villa Cards
- Featured Image (16:9 ratio)
- Unit Number
- Display Name
- Key Features
- Action Buttons
> **Note**: Make sure the contact button behavior changes based on user role:
> - Public: Goes to booking form
> - Owners: Shows owner contact
> - Staff: Shows maintenance history

## User Interactions

### Public Users
- Can view all available units
- Filter by requirements
- Submit booking inquiries
> **Note**: We don't want to show exact unit numbers to public until they book

### Owners
- See their own units highlighted
- Compare with similar units
- Access maintenance history
> **Note**: Owners often want to see how similar units are presented

### Staff
- Full access to all unit details
- Quick access to maintenance records
- Ability to flag units for review
> **Note**: Staff needs quick overview capabilities for maintenance rounds

## Design Elements

### Colors & Styling
Using our existing theme:
- Primary: theme('colors.primary.600')
- Secondary: theme('colors.secondary.400')
> **Note**: The styling should match the physical property's coastal theme

### Components
- `.mi-hero-section` for hero
- `.mi-bento-card` for villa cards
> **Note**: These components will be reused across other features, so they need to be flexible

### Responsive Design
- Mobile: 1 column
- Tablet: 2 columns
- Desktop: 3 columns
> **Note**: Most owners use desktop, most renters use mobile - optimize for both

## Future Considerations

### Phase 2 Features
1. Virtual tours integration
2. Price history tracking
3. Maintenance scheduling
> **Note**: The virtual tours are a high priority for owners who live far away

### Integration Points
- Calendar for availability
- Restaurant for package deals
- Groups for owner communications
> **Note**: The calendar integration is crucial for accurate availability

## Questions & Decisions Needed
1. How to handle multiple owner scenarios?
2. Level of booking integration needed?
3. Should we track price history?
> **Note**: Multiple owners is common, need to discuss with HOA about preferred handling
