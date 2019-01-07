<?php namespace Prismify\Industry\Updates;

use Prismify\Industry\Models\Industry;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        if (Industry::count() > 0) {
            return;
        }

        Industry::insert([
            [
                'is_enabled' => 1,
                'name' => 'Accounting',
                'code' => 'ACCOUNTING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Airlines/Aviation',
                'code' => 'AIRLINES_AVIATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Alternative Dispute Resolution',
                'code' => 'ALTERNATIVE_DISPUTE_RESOLUTION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Alternative Medicine',
                'code' => 'ALTERNATIVE_MEDICINE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Animation',
                'code' => 'ANIMATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Apparel & Fashion',
                'code' => 'APPAREL_FASHION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Architecture & Planning',
                'code' => 'ARCHITECTURE_PLANNING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Arts and Crafts',
                'code' => 'ARTS_AND_CRAFTS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Automotive',
                'code' => 'AUTOMOTIVE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Aviation & Aerospace',
                'code' => 'AVIATION_AEROSPACE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Banking',
                'code' => 'BANKING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Biotechnology',
                'code' => 'BIOTECHNOLOGY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Broadcast Media',
                'code' => 'BROADCAST_MEDIA'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Building Materials',
                'code' => 'BUILDING_MATERIALS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Business Supplies and Equipment',
                'code' => 'BUSINESS_SUPPLIES_AND_EQUIPMENT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Capital Markets',
                'code' => 'CAPITAL_MARKETS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Chemicals',
                'code' => 'CHEMICALS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Civic and Social Organization',
                'code' => 'CIVIC_AND_SOCIAL_ORGANIZATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Civil Engineering',
                'code' => 'CIVIL_ENGINEERING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Commercial Real Estate',
                'code' => 'COMMERCIAL_REAL_ESTATE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Computer & Network Security',
                'code' => 'COMPUTER_NETWORK_SECURITY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Computer Games',
                'code' => 'COMPUTER_GAMES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Computer Hardware',
                'code' => 'COMPUTER_HARDWARE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Computer Networking',
                'code' => 'COMPUTER_NETWORKING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Computer Software',
                'code' => 'COMPUTER_SOFTWARE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Internet',
                'code' => 'INTERNET'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Construction',
                'code' => 'CONSTRUCTION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Consumer Electronics',
                'code' => 'CONSUMER_ELECTRONICS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Consumer Goods',
                'code' => 'CONSUMER_GOODS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Consumer Services',
                'code' => 'CONSUMER_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Cosmetics',
                'code' => 'COSMETICS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Dairy',
                'code' => 'DAIRY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Defense & Space',
                'code' => 'DEFENSE_SPACE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Design',
                'code' => 'DESIGN'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Education Management',
                'code' => 'EDUCATION_MANAGEMENT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'E-Learning',
                'code' => 'E_LEARNING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Electrical/Electronic Manufacturing',
                'code' => 'ELECTRICAL_ELECTRONIC_MANUFACTURING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Entertainment',
                'code' => 'ENTERTAINMENT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Environmental Services',
                'code' => 'ENVIRONMENTAL_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Events Services',
                'code' => 'EVENTS_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Executive Office',
                'code' => 'EXECUTIVE_OFFICE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Facilities Services',
                'code' => 'FACILITIES_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Farming',
                'code' => 'FARMING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Financial Services',
                'code' => 'FINANCIAL_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Fine Art',
                'code' => 'FINE_ART'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Fishery',
                'code' => 'FISHERY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Food & Beverages',
                'code' => 'FOOD_BEVERAGES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Food Production',
                'code' => 'FOOD_PRODUCTION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Fund-Raising',
                'code' => 'FUND_RAISING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Furniture',
                'code' => 'FURNITURE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Gambling & Casinos',
                'code' => 'GAMBLING_CASINOS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Glass, Ceramics & Concrete',
                'code' => 'GLASS_CERAMICS_CONCRETE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Government Administration',
                'code' => 'GOVERNMENT_ADMINISTRATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Government Relations',
                'code' => 'GOVERNMENT_ADMINISTRATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Graphic Design',
                'code' => 'GRAPHIC_DESIGN'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Health, Wellness and Fitness',
                'code' => 'HEALTH_WELLNESS_AND_FITNESS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Higher Education',
                'code' => 'HIGHER_EDUCATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Hospital & Health Care',
                'code' => 'HOSPITAL_HEALTH_CARE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Hospitality',
                'code' => 'HOSPITALITY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Human Resources',
                'code' => 'HUMAN_RESOURCES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Import and Export',
                'code' => 'IMPORT_AND_EXPORT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Individual & Family Services',
                'code' => 'INDIVIDUAL_FAMILY_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Industrial Automation',
                'code' => 'INDUSTRIAL_AUTOMATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Information Services',
                'code' => 'INFORMATION_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Information Technology and Services',
                'code' => 'INFORMATION_TECHNOLOGY_AND_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Insurance',
                'code' => 'INSURANCE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'International Affairs',
                'code' => 'INTERNATIONAL_AFFAIRS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'International Trade and Development',
                'code' => 'INTERNATIONAL_TRADE_AND_DEVELOPMENT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Investment Banking',
                'code' => 'INVESTMENT_BANKING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Investment Management',
                'code' => 'INVESTMENT_MANAGEMENT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Judiciary',
                'code' => 'JUDICIARY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Law Enforcement',
                'code' => 'LAW_ENFORCEMENT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Law Practice',
                'code' => 'LAW_PRACTICE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Legal Services',
                'code' => 'LEGAL_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Legislative Office',
                'code' => 'LEGISLATIVE_OFFICE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Leisure, Travel & Tourism',
                'code' => 'LEISURE_TRAVEL_TOURISM'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Libraries',
                'code' => 'LIBRARIES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Logistics and Supply Chain',
                'code' => 'LOGISTICS_AND_SUPPLY_CHAIN'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Luxury Goods & Jewelry',
                'code' => 'LUXURY_GOODS_JEWELRY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Machinery',
                'code' => 'MACHINERY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Management Consulting',
                'code' => 'MANAGEMENT_CONSULTING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Maritime',
                'code' => 'MARITIME'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Market Research',
                'code' => 'MARKET_RESEARCH'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Marketing and Advertising',
                'code' => 'MARKETING_AND_ADVERTISING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Mechanical or Industrial Engineering',
                'code' => 'MECHANICAL_OR_INDUSTRIAL_ENGINEERING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Media Production',
                'code' => 'MEDIA_PRODUCTION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Medical Devices',
                'code' => 'MEDICAL_DEVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Medical Practice',
                'code' => 'MEDICAL_PRACTICE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Mental Health Care',
                'code' => 'MENTAL_HEALTH_CARE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Military',
                'code' => 'MILITARY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Mining & Metals',
                'code' => 'MINING_METALS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Motion Pictures and Film',
                'code' => 'MOTION_PICTURES_AND_FILM'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Museums and Institutions',
                'code' => 'MUSEUMS_AND_INSTITUTIONS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Music',
                'code' => 'MUSIC'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Nanotechnology',
                'code' => 'NANOTECHNOLOGY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Newspapers',
                'code' => 'NEWSPAPERS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Nonprofit Organization Management',
                'code' => 'NON_PROFIT_ORGANIZATION_MANAGEMENT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Oil & Energy',
                'code' => 'OIL_ENERGY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Online Media',
                'code' => 'ONLINE_MEDIA'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Outsourcing/Offshoring',
                'code' => 'OUTSOURCING_OFFSHORING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Package/Freight Delivery',
                'code' => 'PACKAGE_FREIGHT_DELIVERY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Packaging and Containers',
                'code' => 'PACKAGING_AND_CONTAINERS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Paper & Forest Products',
                'code' => 'PAPER_FOREST_PRODUCTS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Performing Arts',
                'code' => 'PERFORMING_ARTS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Pharmaceuticals',
                'code' => 'PHARMACEUTICALS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Philanthropy',
                'code' => 'PHILANTHROPY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Photography',
                'code' => 'PHOTOGRAPHY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Plastics',
                'code' => 'PLASTICS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Political Organization',
                'code' => 'POLITICAL_ORGANIZATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Primary/Secondary Education',
                'code' => 'PRIMARY_SECONDARY_EDUCATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Printing',
                'code' => 'PRINTING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Professional Training & Coaching',
                'code' => 'PROFESSIONAL_TRAINING_COACHING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Program Development',
                'code' => 'PROGRAM_DEVELOPMENT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Public Policy',
                'code' => 'PUBLIC_POLICY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Public Relations and Communications',
                'code' => 'PUBLIC_RELATIONS_AND_COMMUNICATIONS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Public Safety',
                'code' => 'PUBLIC_SAFETY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Publishing',
                'code' => 'PUBLISHING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Railroad Manufacture',
                'code' => 'RAILROAD_MANUFACTURE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Ranching',
                'code' => 'RANCHING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Real Estate',
                'code' => 'REAL_ESTATE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Recreational Facilities and Services',
                'code' => 'RECREATIONAL_FACILITIES_AND_SERVICES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Religious Institutions',
                'code' => 'RELIGIOUS_INSTITUTIONS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Renewables & Environment',
                'code' => 'RENEWABLES_ENVIRONMENT'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Research',
                'code' => 'RESEARCH'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Restaurants',
                'code' => 'RESTAURANTS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Retail',
                'code' => 'RETAIL'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Security and Investigations',
                'code' => 'SECURITY_AND_INVESTIGATIONS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Semiconductors',
                'code' => 'SEMICONDUCTORS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Shipbuilding',
                'code' => 'SHIPBUILDING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Sporting Goods',
                'code' => 'SPORTING_GOODS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Sports',
                'code' => 'SPORTS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Staffing and Recruiting',
                'code' => 'STAFFING_AND_RECRUITING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Supermarkets',
                'code' => 'SUPERMARKETS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Telecommunications',
                'code' => 'TELECOMMUNICATIONS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Textiles',
                'code' => 'TEXTILES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Think Tanks',
                'code' => 'THINK_TANKS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Tobacco',
                'code' => 'TOBACCO'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Translation and Localization',
                'code' => 'TRANSLATION_AND_LOCALIZATION'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Transportation/Trucking/Railroad',
                'code' => 'TRANSPORTATION_TRUCKING_RAILROAD'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Utilities',
                'code' => 'UTILITIES'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Venture Capital & Private Equity',
                'code' => 'VENTURE_CAPITAL_PRIVATE_EQUITY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Veterinary',
                'code' => 'VETERINARY'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Warehousing',
                'code' => 'WAREHOUSING'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Wholesale',
                'code' => 'WHOLESALE'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Wine and Spirits',
                'code' => 'WINE_AND_SPIRITS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Wireless',
                'code' => 'WIRELESS'
            ],
            [
                'is_enabled' => 1,
                'name' => 'Writing and Editing',
                'code' => 'WRITING_AND_EDITING'
            ],
        ]);
    }
}