---
name: DompetKu
colors:
  surface: '#f7f9fc'
  surface-dim: '#d8dadd'
  surface-bright: '#f7f9fc'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f4f7'
  surface-container: '#eceef1'
  surface-container-high: '#e6e8eb'
  surface-container-highest: '#e0e3e6'
  on-surface: '#191c1e'
  on-surface-variant: '#43474e'
  inverse-surface: '#2d3133'
  inverse-on-surface: '#eff1f4'
  outline: '#73777f'
  outline-variant: '#c3c6cf'
  surface-tint: '#406087'
  primary: '#002444'
  on-primary: '#ffffff'
  primary-container: '#163a5f'
  on-primary-container: '#84a4cf'
  inverse-primary: '#a8c9f5'
  secondary: '#006d44'
  on-secondary: '#ffffff'
  secondary-container: '#8cf5ba'
  on-secondary-container: '#007147'
  tertiary: '#2f2100'
  on-tertiary: '#ffffff'
  tertiary-container: '#4a3600'
  on-tertiary-container: '#c79c30'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d2e4ff'
  primary-fixed-dim: '#a8c9f5'
  on-primary-fixed: '#001c37'
  on-primary-fixed-variant: '#27486e'
  secondary-fixed: '#8ff7bc'
  secondary-fixed-dim: '#73dba2'
  on-secondary-fixed: '#002111'
  on-secondary-fixed-variant: '#005232'
  tertiary-fixed: '#ffdf9c'
  tertiary-fixed-dim: '#efc051'
  on-tertiary-fixed: '#251a00'
  on-tertiary-fixed-variant: '#5b4300'
  background: '#f7f9fc'
  on-background: '#191c1e'
  surface-variant: '#e0e3e6'
typography:
  display-lg:
    fontFamily: Inter
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
    letterSpacing: -0.02em
  headline-md:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
    letterSpacing: -0.01em
  headline-sm:
    fontFamily: Inter
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
  body-lg:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  label-md:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 16px
    letterSpacing: 0.01em
  currency-display:
    fontFamily: Inter
    fontSize: 36px
    fontWeight: '700'
    lineHeight: 44px
    letterSpacing: -0.03em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  container-padding: 20px
  gutter: 12px
---

## Brand & Style

The design system is anchored in a philosophy of **Safe Modernism**. It prioritizes absolute clarity and institutional trust, reflecting the stability required for personal finance management in the Indonesian market. 

The visual identity is defined by a clean, systematic fintech aesthetic. It avoids decorative clutter in favor of a "Utility-First" approach, where every pixel serves a functional purpose. By leveraging a familiar professional blue-centric palette, the design system establishes immediate credibility. The emotional response should be one of "Financial Calm"—reducing the anxiety of money management through orderly layouts, generous white space, and a premium, subdued finish.

## Colors

The color system is built on a foundation of **Deep Navy (#163A5F)**, symbolizing institutional stability and professional heritage. This primary color is used for key navigation, headers, and primary actions to anchor the user's journey.

- **Semantic Logic:** Financial flows are color-coded for instant recognition. **Emerald Green** is strictly reserved for income and positive growth, while **Soft Red** denotes expenses. 
- **Accentuation:** **Warm Gold** is used sparingly for aspirational features like savings goals and premium milestones.
- **Surface Strategy:** The background utilizes a very cool **Light Grey/Blue (#F7F9FC)** to reduce eye strain and provide a sophisticated alternative to pure white. Pure white is reserved for cards and elevated surfaces to create a clear "layering" effect.

## Typography

This design system uses **Inter** exclusively to ensure maximum legibility and a utilitarian, technical feel. The typographic hierarchy is strictly enforced to manage information density common in financial apps.

- **Numerical Clarity:** For balances and transaction amounts, use the `currency-display` or `display-lg` tokens with tighter letter spacing to create a high-impact, premium "bank-statement" aesthetic.
- **Scanning:** Headlines use Semi-Bold (600) weights to provide clear section breaks. 
- **Contextual Labels:** Small caps or medium-weight labels (12px) should be used for secondary metadata (e.g., timestamps, categories) to keep the primary data points as the focal point.

## Layout & Spacing

The layout operates on a rigorous **8px grid system**. This mathematical rhythm ensures consistency across various screen sizes and creates a sense of professional order.

- **Content Padding:** A standard container padding of `20px` (or `24px` for wider devices) provides a generous "breathable" margin, preventing the UI from feeling cramped.
- **Grouping:** Use `8px` (sm) for internal element grouping (e.g., icon next to text) and `16px` (md) for spacing between distinct components or sections.
- **Mobile First:** The layout is optimized for single-handed use, with primary interactive elements placed within the lower "thumb zone" of the device.

## Elevation & Depth

Hierarchy in this design system is achieved through **Tonal Layering** supplemented by soft, ambient shadows.

- **Level 0 (Base):** The `neutral-background` (#F7F9FC).
- **Level 1 (Cards):** White surfaces with a very subtle 1px border (#E2E8F0) and a soft "Fintech Shadow" (Y: 4px, Blur: 12px, Color: rgba(22, 58, 95, 0.05)).
- **Level 2 (Active/Floating):** Higher elevation for primary action buttons or modal sheets. Shadows here are more pronounced (Y: 8px, Blur: 20px, Color: rgba(22, 58, 95, 0.12)).

Avoid heavy black shadows; instead, use the Primary Navy color at very low opacities to tint the shadows, maintaining a premium and cohesive look.

## Shapes

The shape language is **Rounded**, striking a balance between modern friendliness and corporate structure.

- **Base Components:** Buttons and input fields use an `8px` (default) radius.
- **Structural Elements:** Container cards and bottom sheets use a `16px` (large) or `24px` (extra-large) radius to feel more approachable and modern.
- **Indicators:** Status tags and small action chips should use the `pill` radius to distinguish them from structural blocks.

## Components

### Buttons
- **Primary:** Solid Navy (#163A5F) with white text. 8px radius.
- **Secondary:** Outline Navy or Ghost style for less urgent actions.
- **FAB (Floating Action Button):** A circular '+' button in Navy or Emerald Green, positioned at the bottom right for quick transaction entry.

### Cards
- **Summary Cards:** Use white backgrounds. For the "Total Balance" card, a subtle gradient using Primary Navy is permitted to create a high-contrast focal point.
- **Transaction Items:** Simple list items with an icon on the left, primary text and category in the center, and the amount (color-coded) on the right.

### Input Fields
- Understated design with a light grey border. Upon focus, the border transitions to Primary Navy with a subtle outer glow.

### Chips & Badges
- Used for categories (e.g., "Food", "Transport"). These use low-opacity versions of the semantic colors (e.g., 10% Emerald Green background with 100% Emerald Green text).

### Iconography
- Use 24px line icons with a consistent 2px stroke weight. Icons should be encased in a light grey circular or rounded-square background for better visual grouping.