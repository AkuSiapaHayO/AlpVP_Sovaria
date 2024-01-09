<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Recipe 1 (Spaghetti Bolognese)
        $recipe1 = Recipe::create([
            'recipe_name' => 'Spaghetti Bolognese',
            'caption' => 'Classic Italian pasta dish with rich meat sauce.',
            'ingredients' => "400g spaghetti\n500g ground beef\n1 onion (finely chopped)\n2 cloves garlic (minced)\n400g canned crushed tomatoes\n200ml red wine\n2 tbsp tomato paste\n2 tbsp olive oil\n1 tsp dried oregano\n1 tsp dried basil\nSalt and pepper to taste\nFreshly grated Parmesan cheese for serving.",
            'steps' => "1. Cook spaghetti according to package instructions.\n2. In a large skillet, heat olive oil over medium heat.\n3. Add chopped onion and minced garlic, sauté until softened.\n4. Add ground beef, cook until browned.\n5. Pour in red wine, let it simmer.\n6. Stir in crushed tomatoes, tomato paste, dried oregano, dried basil, salt, and pepper.\n7. Simmer over low heat for 20-30 minutes.\n8. Serve the sauce over cooked spaghetti, garnish with Parmesan cheese.",
            'image' => 'http://10.0.2.2:8000/images/spaghetti_bolognese.jpg',
            'calorie' => 600,
            'servings' => 4,
            'time' => 30,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe1->categories()->attach([6, 2]); // Attach categories with IDs 1 and 2

        // Recipe 2 (Tenderloin Steak)
        $recipe2 = Recipe::create([
            'recipe_name' => 'Tenderloin Steak',
            'caption' => 'Juicy and flavorful tenderloin steak cooked to perfection.',
            'ingredients' => "2 beef tenderloin steaks (6-8 oz each)\nSalt\nBlack pepper\n2 tbsp olive oil\n2 cloves garlic (minced)\n2 sprigs fresh rosemary\n2 sprigs fresh thyme\n2 tbsp unsalted butter.",
            'steps' => "1. Preheat the grill or pan.\n2. Season the steaks with salt and pepper.\n3. Heat olive oil in a pan, add minced garlic, rosemary, and thyme.\n4. Sear steaks on each side until golden brown.\n5. Add butter and baste steaks with herb-infused butter.\n6. Cook to desired doneness.\n7. Let steaks rest for a few minutes before serving.",
            'image' => 'http://10.0.2.2:8000/images/tenderloin_steak.jpeg',
            'calorie' => 500,
            'servings' => 2,
            'time' => 25,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe2->categories()->attach([2, 14, 15, 16]); // Attach categories with IDs 3 and 4

        // Recipe 3 (Chocolate Chip Cookies)
        $recipe3 = Recipe::create([
            'recipe_name' => 'Chocolate Chip Cookies',
            'caption' => 'Classic chocolate chip cookies for a delightful treat.',
            'ingredients' => "2 1/4 cups all-purpose flour\n1/2 tsp baking soda\n1 cup unsalted butter (softened)\n1/2 cup granulated sugar\n1 cup packed brown sugar\n1 tsp salt\n2 tsp vanilla extract\n2 large eggs\n2 cups semisweet chocolate chips\n1 cup chopped nuts (optional).",
            'steps' => "1. Preheat the oven to 375°F (190°C).\n2. In a small bowl, mix flour and baking soda.\n3. In a large bowl, beat butter, granulated sugar, brown sugar, and vanilla until creamy.\n4. Add eggs, one at a time, beating well after each addition.\n5. Gradually add the flour mixture.\n6. Stir in chocolate chips and nuts.\n7. Drop rounded tablespoons of dough onto ungreased baking sheets.\n8. Bake for 9-11 minutes until golden brown.\n9. Cool on wire racks before serving.",
            'image' => 'http://10.0.2.2:8000/images/chocolate_chip_cookies.jpg',
            'calorie' => 200,
            'servings' => 20,
            'time' => 15,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe3->categories()->attach([1, 8, 9]); // Attach categories with IDs 5 and 6

        // Recipe 4 (Grilled Salmon)
        $recipe4 = Recipe::create([
            'recipe_name' => 'Grilled Salmon',
            'caption' => 'Healthy and flavorful grilled salmon with lemon and herbs.',
            'ingredients' => "4 salmon fillets\n2 tbsp olive oil\n1 lemon (sliced)\n2 cloves garlic (minced)\n1 tsp dried dill\n1 tsp paprika\nSalt and pepper to taste.",
            'steps' => "1. Preheat the grill to medium-high heat.\n2. Rub salmon fillets with olive oil.\n3. Season with minced garlic, dried dill, paprika, salt, and pepper.\n4. Place lemon slices on top of each fillet.\n5. Grill for 5-7 minutes per side, or until salmon is cooked through.\n6. Serve with your favorite side dishes.",
            'image' => 'http://10.0.2.2:8000/images/grilled_salmon.jpg',
            'calorie' => 300,
            'servings' => 4,
            'time' => 20,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe4->categories()->attach([2, 8, 10, 12, 14, 15, 16]); // Attach categories with IDs 1 and 4

        // Recipe 5 (Vegetarian Buddha Bowl)
        $recipe5 = Recipe::create([
            'recipe_name' => 'Vegetarian Buddha Bowl',
            'caption' => 'A nutritious and colorful bowl packed with vegetables and grains.',
            'ingredients' => "1 cup quinoa\n2 cups mixed greens\n1 cup cherry tomatoes (halved)\n1 cup cucumber (sliced)\n1 cup carrots (shredded)\n1 avocado (sliced)\n1/4 cup hummus\n2 tbsp olive oil\n1 lemon (juiced)\nSalt and pepper to taste.",
            'steps' => "1. Cook quinoa according to package instructions.\n2. In a bowl, arrange mixed greens, cherry tomatoes, cucumber, shredded carrots, and sliced avocado.\n3. Spoon cooked quinoa into the bowl.\n4. Drizzle with olive oil and lemon juice.\n5. Season with salt and pepper.\n6. Add a dollop of hummus.\n7. Toss everything together before serving.",
            'image' => 'http://10.0.2.2:8000/images/vegetarian_buddha_bowl.jpg',
            'calorie' => 400,
            'servings' => 2,
            'time' => 30,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe5->categories()->attach([1, 2, 5, 8, 11, 14, 16, 17]); // Attach categories with IDs 2 and 5

        // Recipe 6 (Mango Salsa Chicken)
        $recipe6 = Recipe::create([
            'recipe_name' => 'Mango Salsa Chicken',
            'caption' => 'A tropical twist on grilled chicken with fresh mango salsa.',
            'ingredients' => "4 boneless, skinless chicken breasts\n1 cup diced mango\n1/2 cup red bell pepper (diced)\n1/4 cup red onion (chopped)\n1/4 cup fresh cilantro (chopped)\n1 lime (juiced)\n2 tbsp olive oil\nSalt and pepper to taste.",
            'steps' => "1. Preheat the grill to medium heat.\n2. Season chicken breasts with salt and pepper.\n3. Grill chicken for 6-8 minutes per side, or until cooked through.\n4. In a bowl, combine diced mango, red bell pepper, red onion, cilantro, lime juice, and olive oil to make the salsa.\n5. Spoon mango salsa over grilled chicken before serving.",
            'image' => 'http://10.0.2.2:8000/images/mango_salsa_chicken.jpg',
            'calorie' => 350,
            'servings' => 4,
            'time' => 25,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe6->categories()->attach([2, 8, 12, 13, 14, 15, 16]); // Attach categories with IDs 3 and 6

        // Recipe 7 (Quinoa Salad)
        $recipe7 = Recipe::create([
            'recipe_name' => 'Quinoa Salad',
            'caption' => 'A refreshing and nutritious quinoa salad with colorful vegetables.',
            'ingredients' => "1 cup quinoa\n2 cups cherry tomatoes (halved)\n1 cucumber (diced)\n1 bell pepper (sliced)\n1/4 cup red onion (chopped)\n1/4 cup feta cheese (crumbled)\n2 tbsp olive oil\n1 lemon (juiced)\nFresh basil leaves (chopped)\nSalt and pepper to taste.",
            'steps' => "1. Cook quinoa according to package instructions.\n2. In a large bowl, combine cooked quinoa, cherry tomatoes, cucumber, bell pepper, red onion, and feta cheese.\n3. In a small bowl, whisk together olive oil, lemon juice, salt, and pepper.\n4. Drizzle the dressing over the salad and toss gently.\n5. Garnish with chopped fresh basil.\n6. Serve chilled.",
            'image' => 'http://10.0.2.2:8000/images/quinoa_salad.jpg',
            'calorie' => 300,
            'servings' => 3,
            'time' => 20,
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe7->categories()->attach([1, 2, 5, 8, 11, 14, 16, 17]); // Attach categories with IDs 2 and 5

        // Recipe 8 (Grilled Chicken Wrap)
        $recipe8 = Recipe::create([
            'recipe_name' => 'Grilled Chicken Wrap',
            'caption' => 'A light and tasty grilled chicken wrap with fresh vegetables.',
            'ingredients' => "2 boneless, skinless chicken breasts\n1 tsp olive oil\n1 tsp cumin powder\n1 tsp paprika\nSalt and pepper to taste\nWhole wheat wraps\nGreek yogurt\nMixed greens\nTomato (sliced)\nCucumber (sliced)\nAvocado (sliced)\nSalsa.",
            'steps' => "1. Preheat the grill or pan.\n2. Rub chicken breasts with olive oil, cumin powder, paprika, salt, and pepper.\n3. Grill chicken until cooked through.\n4. Slice grilled chicken into strips.\n5. Warm whole wheat wraps.\n6. Spread Greek yogurt on wraps.\n7. Layer with mixed greens, grilled chicken strips, tomato, cucumber, avocado, and salsa.\n8. Wrap and secure with toothpicks.\n9. Serve immediately.",
            'image' => 'http://10.0.2.2:8000/images/grilled_chicken_wrap.jpg',
            'calorie' => 350,
            'servings' => 2,
            'time' => 25,
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe8->categories()->attach([2, 8, 12, 14, 15, 16]); // Attach categories with IDs 3 and 5

        // Recipe 9 (Green Smoothie)
        $recipe9 = Recipe::create([
            'recipe_name' => 'Green Smoothie',
            'caption' => 'A nutritious green smoothie packed with fruits and vegetables.',
            'ingredients' => "1 cup spinach\n1/2 cucumber (peeled and sliced)\n1 kiwi (peeled and sliced)\n1/2 green apple (cored and sliced)\n1/2 banana\n1 cup coconut water\n1 tbsp chia seeds\nIce cubes.",
            'steps' => "1. In a blender, combine spinach, cucumber, kiwi, green apple, banana, and coconut water.\n2. Blend until smooth.\n3. Add chia seeds and blend for a few seconds.\n4. Add ice cubes and blend until well combined.\n5. Pour into a glass and enjoy.",
            'image' => 'http://10.0.2.2:8000/images/green_smoothie.jpg',
            'calorie' => 150,
            'servings' => 1,
            'time' => 10,
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe9->categories()->attach([4, 3, 8, 11, 14, 16, 17]); // Attach categories with IDs 2 and 4

        // Recipe 10 (Global Fusion Tacos)
        $recipe10 = Recipe::create([
            'recipe_name' => 'Global Fusion Tacos',
            'caption' => 'A culinary journey in a taco shell with diverse flavors from around the world.',
            'ingredients' => "1 lb ground beef\n1 packet taco seasoning\n1 cup cooked jasmine rice\n1 cup black beans (canned)\n1 cup pineapple (diced)\n1 cup feta cheese (crumbled)\n1/2 cup red cabbage (shredded)\n1/4 cup fresh cilantro (chopped)\n8 small tortillas",
            'steps' => "1. In a pan, brown ground beef and add taco seasoning.\n2. Warm tortillas in a skillet.\n3. Assemble tacos with a layer of seasoned beef, jasmine rice, black beans, pineapple, feta cheese, red cabbage, and cilantro.\n4. Serve and enjoy the global fusion flavors.",
            'image' => 'http://10.0.2.2:8000/images/fusion_tacos.jpg',
            'calorie' => 450,
            'servings' => 4,
            'time' => 30,
            'user_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe10->categories()->attach([2, 8, 9, 15]); // Attach categories with IDs 1 and 3

        // Recipe 11 (Mediterranean Pasta Salad)
        $recipe11 = Recipe::create([
            'recipe_name' => 'Mediterranean Pasta Salad',
            'caption' => 'A vibrant pasta salad inspired by the flavors of the Mediterranean.',
            'ingredients' => "8 oz fusilli pasta\n1 cup cherry tomatoes (halved)\n1/2 cup Kalamata olives (pitted and sliced)\n1/2 cup feta cheese (cubed)\n1/4 cup red onion (thinly sliced)\n1/4 cup cucumber (diced)\n2 tbsp extra-virgin olive oil\n1 tbsp balsamic vinegar\n1 tsp dried oregano\nSalt and pepper to taste",
            'steps' => "1. Cook fusilli pasta according to package instructions.\n2. In a large bowl, combine cooked pasta, cherry tomatoes, Kalamata olives, feta cheese, red onion, and cucumber.\n3. In a small bowl, whisk together olive oil, balsamic vinegar, dried oregano, salt, and pepper.\n4. Pour the dressing over the pasta salad and toss gently.\n5. Chill before serving.",
            'image' => 'http://10.0.2.2:8000/images/mediterranean_pasta_salad.jpg',
            'calorie' => 350,
            'servings' => 6,
            'time' => 20,
            'user_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe11->categories()->attach([2, 5, 8, 9, 13, 14]); // Attach categories with IDs 2 and 4

        // Recipe 12 (Spicy Sushi Burrito)
        $recipe12 = Recipe::create([
            'recipe_name' => 'Spicy Sushi Burrito',
            'caption' => 'An adventurous twist on sushi, wrapped in a burrito for a spicy kick.',
            'ingredients' => "1 cup sushi rice (cooked)\n1 nori sheet\n1/2 lb sushi-grade tuna (sliced)\n1/2 avocado (sliced)\n1/4 cup cucumber (julienned)\n1/4 cup spicy mayo\nSoy sauce for dipping",
            'steps' => "1. Place the nori sheet on a bamboo sushi rolling mat.\n2. Spread sushi rice evenly on the nori, leaving a border at the top.\n3. Arrange sliced tuna, avocado, and cucumber in the center.\n4. Drizzle spicy mayo over the ingredients.\n5. Roll the sushi burrito tightly, sealing the edge with water.\n6. Slice and serve with soy sauce.",
            'image' => 'http://10.0.2.2:8000/images/spicy_sushi_burrito.jpg',
            'calorie' => 400,
            'servings' => 2,
            'time' => 25,
            'user_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe12->categories()->attach([1, 8, 9]); // Attach categories with IDs 1 and 3

        // Recipe 13 (Triple Chocolate Brownies)
        $recipe13 = Recipe::create([
            'recipe_name' => 'Triple Chocolate Brownies',
            'caption' => 'Indulge in the decadence of triple chocolate goodness with these fudgy brownies.',
            'ingredients' => "1 cup unsalted butter\n1 1/2 cups granulated sugar\n4 large eggs\n1 tsp vanilla extract\n1 cup all-purpose flour\n1/2 cup cocoa powder\n1/4 tsp salt\n1 cup semisweet chocolate chips\n1/2 cup white chocolate chips\n1/2 cup dark chocolate chunks",
            'steps' => "1. Preheat the oven to 350°F (175°C) and grease a baking pan.\n2. In a saucepan, melt the butter and remove from heat.\n3. Stir in sugar, eggs, and vanilla extract until well combined.\n4. In a separate bowl, whisk together flour, cocoa powder, and salt.\n5. Add the dry ingredients to the wet ingredients and mix until just combined.\n6. Fold in semisweet chocolate chips, white chocolate chips, and dark chocolate chunks.\n7. Pour the batter into the prepared pan and spread evenly.\n8. Bake for 25-30 minutes or until a toothpick inserted comes out with a few moist crumbs.\n9. Allow to cool before cutting into squares.",
            'image' => 'http://10.0.2.2:8000/images/triple_chocolate_brownies.jpg',
            'calorie' => 300,
            'servings' => 12,
            'time' => 40,
            'user_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe13->categories()->attach([1, 9]); // Attach categories with IDs 5 and 6

        // Recipe 14 (Classic French Baguette)
        $recipe14 = Recipe::create([
            'recipe_name' => 'Classic French Baguette',
            'caption' => 'Experience the joy of baking with this recipe for homemade French baguettes.',
            'ingredients' => "4 cups bread flour\n1 1/2 tsp salt\n1 1/2 tsp active dry yeast\n1 1/2 cups warm water\n1 tsp sugar",
            'steps' => "1. In a small bowl, combine warm water, sugar, and yeast. Let it sit until frothy.\n2. In a large bowl, mix bread flour and salt.\n3. Add the yeast mixture to the flour and knead until a smooth dough forms.\n4. Place the dough in a lightly oiled bowl, cover, and let it rise until doubled in size.\n5. Preheat the oven to 450°F (230°C).\n6. Divide the dough into two portions and shape into baguettes.\n7. Place the baguettes on a baking sheet, cover, and let them rise again.\n8. Bake for 20-25 minutes or until golden brown and crusty.\n9. Cool before slicing.",
            'image' => 'http://10.0.2.2:8000/images/french_baguette.jpg',
            'calorie' => 150,
            'servings' => 8,
            'time' => 120,
            'user_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe14->categories()->attach([1, 8, 9]); // Attach categories with IDs 5 and 6

        // Recipe 15 (Lemon Blueberry Cheesecake)
        $recipe15 = Recipe::create([
            'recipe_name' => 'Lemon Blueberry Cheesecake',
            'caption' => 'Elevate your baking skills with this delightful lemon blueberry cheesecake.',
            'ingredients' => "For the Crust:\n1 1/2 cups graham cracker crumbs\n1/4 cup melted butter\n\nFor the Filling:\n3 packages (24 oz) cream cheese, softened\n1 cup granulated sugar\n3 large eggs\n1 tsp vanilla extract\n1 cup fresh blueberries\nZest of 1 lemon\n\nFor the Topping:\n1/2 cup blueberry preserves\n1 tbsp water",
            'steps' => "1. Preheat the oven to 325°F (163°C) and grease a springform pan.\n2. Mix graham cracker crumbs with melted butter and press into the bottom of the pan to form the crust.\n3. In a large bowl, beat cream cheese and sugar until smooth.\n4. Add eggs one at a time, beating well after each addition. Stir in vanilla extract.\n5. Gently fold in fresh blueberries and lemon zest.\n6. Pour the filling over the crust and smooth the top.\n7. Bake for 50-60 minutes or until the center is set.\n8. Cool completely before refrigerating.\n9. In a small saucepan, heat blueberry preserves with water and spread over the chilled cheesecake before serving.",
            'image' => 'http://10.0.2.2:8000/images/lemon_blueberry_cheesecake.jpg',
            'calorie' => 350,
            'servings' => 10,
            'time' => 90,
            'user_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe15->categories()->attach([1, 3, 9]); // Attach categories with IDs 5 and 6

        // Recipe 16 (BBQ Pulled Pork Sliders)
        $recipe16 = Recipe::create([
            'recipe_name' => 'BBQ Pulled Pork Sliders',
            'caption' => 'Savor the smoky flavor with these irresistible BBQ pulled pork sliders.',
            'ingredients' => "For the Pulled Pork:\n3 lbs pork shoulder\n2 tbsp olive oil\n1 tbsp paprika\n1 tbsp brown sugar\n1 tbsp chili powder\n1 tsp cumin\n1 tsp garlic powder\n1 tsp onion powder\nSalt and pepper to taste\n\nFor the Sliders:\nSlider buns\nColeslaw\nBBQ sauce",
            'steps' => "1. Preheat the grill to 225°F (107°C) for indirect heat.\n2. Rub pork shoulder with olive oil, paprika, brown sugar, chili powder, cumin, garlic powder, onion powder, salt, and pepper.\n3. Place the pork on the grill and smoke for 4-5 hours or until the internal temperature reaches 195°F (90°C).\n4. Shred the pulled pork and mix with your favorite BBQ sauce.\n5. Toast slider buns on the grill.\n6. Assemble sliders with pulled pork and coleslaw.\n7. Serve with extra BBQ sauce on the side.",
            'image' => 'http://10.0.2.2:8000/images/bbq_pulled_pork_sliders.jpg',
            'calorie' => 450,
            'servings' => 8,
            'time' => 300,
            'user_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe16->categories()->attach([2, 12, 13, 15]); // Attach categories with IDs 3 and 4

        // Recipe 17 (Grilled Shrimp Skewers)
        $recipe17 = Recipe::create([
            'recipe_name' => 'Grilled Shrimp Skewers',
            'caption' => 'Elevate your grilling game with these succulent and flavorful shrimp skewers.',
            'ingredients' => "1 lb large shrimp (peeled and deveined)\n2 tbsp olive oil\n2 cloves garlic (minced)\n1 tsp paprika\n1 tsp dried oregano\n1/2 tsp red pepper flakes\nSalt and pepper to taste\nLemon wedges for serving",
            'steps' => "1. Preheat the grill to medium-high heat.\n2. In a bowl, combine shrimp with olive oil, minced garlic, paprika, oregano, red pepper flakes, salt, and pepper.\n3. Thread shrimp onto skewers.\n4. Grill shrimp skewers for 2-3 minutes per side or until they turn pink and opaque.\n5. Serve with lemon wedges for squeezing over the shrimp.",
            'image' => 'http://10.0.2.2:8000/images/grilled_shrimp_skewers.jpg',
            'calorie' => 250,
            'servings' => 4,
            'time' => 20,
            'user_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe17->categories()->attach([2, 9, 12, 14, 15]); // Attach categories with IDs 3 and 4

        // Recipe 18 (Smoked Beef Brisket)
        $recipe18 = Recipe::create([
            'recipe_name' => 'Smoked Beef Brisket',
            'caption' => 'Master the art of smoking with this tender and juicy smoked beef brisket recipe.',
            'ingredients' => "1 whole beef brisket (10-12 lbs)\n2 tbsp black pepper\n2 tbsp kosher salt\n1 tbsp paprika\n1 tbsp brown sugar\n1 tsp garlic powder\n1 tsp onion powder\n1 tsp cayenne pepper\nWood chips for smoking",
            'steps' => "1. Trim excess fat from the brisket, leaving a thin layer.\n2. In a bowl, mix black pepper, kosher salt, paprika, brown sugar, garlic powder, onion powder, and cayenne pepper to create a rub.\n3. Rub the brisket with the spice mixture, covering all sides.\n4. Preheat the smoker to 225°F (107°C) and add wood chips.\n5. Place the brisket on the smoker rack.\n6. Smoke for 10-12 hours or until the internal temperature reaches 200°F (93°C).\n7. Allow the brisket to rest before slicing against the grain.\n8. Serve with your favorite BBQ sauce.",
            'image' => 'http://10.0.2.2:8000/images/smoked_beef_brisket.jpg',
            'calorie' => 350,
            'servings' => 12,
            'time' => 720,
            'user_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe18->categories()->attach([2, 12, 15]); // Attach categories with IDs 3 and 4

        // Recipe 19 (Stuffed Bell Peppers)
        $recipe19 = Recipe::create([
            'recipe_name' => 'Stuffed Bell Peppers',
            'caption' => 'Colorful and nutritious bell peppers stuffed with a savory filling.',
            'ingredients' => "4 bell peppers (any color)\n1 cup quinoa\n1 can black beans (drained and rinsed)\n1 cup corn kernels\n1 cup cherry tomatoes (diced)\n1 cup spinach (chopped)\n1/2 cup feta cheese (crumbled)\n1 tsp cumin\n1 tsp chili powder\nSalt and pepper to taste\nSalsa for serving",
            'steps' => "1. Preheat the oven to 375°F (190°C).\n2. Cut the tops off bell peppers and remove seeds and membranes.\n3. In a pot, cook quinoa according to package instructions.\n4. In a large bowl, combine cooked quinoa, black beans, corn, cherry tomatoes, spinach, feta cheese, cumin, chili powder, salt, and pepper.\n5. Stuff each bell pepper with the quinoa mixture.\n6. Place stuffed peppers in a baking dish.\n7. Bake for 25-30 minutes or until peppers are tender.\n8. Serve with salsa.",
            'image' => 'http://10.0.2.2:8000/images/stuffed_bell_peppers.jpg',
            'calorie' => 300,
            'servings' => 4,
            'time' => 45,
            'user_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe19->categories()->attach([1, 2, 8, 9, 14, 16]); // Attach categories with IDs 2 and 5

        // Recipe 20 (Mushroom and Spinach Risotto)
        $recipe20 = Recipe::create([
            'recipe_name' => 'Mushroom and Spinach Risotto',
            'caption' => 'Creamy and comforting risotto with earthy mushrooms and fresh spinach.',
            'ingredients' => "1 1/2 cups Arborio rice\n1 cup cremini mushrooms (sliced)\n1 cup baby spinach\n1/2 cup dry white wine\n4 cups vegetable broth (heated)\n1 onion (finely chopped)\n2 cloves garlic (minced)\n1/2 cup Parmesan cheese (grated)\n2 tbsp olive oil\nSalt and pepper to taste",
            'steps' => "1. In a large skillet, heat olive oil over medium heat.\n2. Add chopped onion and cook until softened.\n3. Stir in Arborio rice and cook for 2 minutes.\n4. Pour in white wine and cook until it evaporates.\n5. Add sliced mushrooms and minced garlic, sauté until mushrooms are tender.\n6. Begin adding vegetable broth, one ladle at a time, stirring frequently until absorbed.\n7. Continue this process until the rice is creamy and cooked to al dente.\n8. Stir in baby spinach, Parmesan cheese, salt, and pepper.\n9. Serve the risotto hot.",
            'image' => 'http://10.0.2.2:8000/images/mushroom_spinach_risotto.jpg',
            'calorie' => 400,
            'servings' => 3,
            'time' => 40,
            'user_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe20->categories()->attach([2, 8, 14]); // Attach categories with IDs 2 and 5

        // Recipe 21 (Veggie Pita Wraps)
        $recipe21 = Recipe::create([
            'recipe_name' => 'Veggie Pita Wraps',
            'caption' => 'A quick and delicious way to enjoy a variety of veggies in a convenient wrap.',
            'ingredients' => "4 whole wheat pita bread\n1 cup hummus\n1 cucumber (sliced)\n1 bell pepper (sliced)\n1 tomato (sliced)\n1/2 red onion (thinly sliced)\n1 cup mixed greens\n1/4 cup Kalamata olives (pitted and sliced)\n1/4 cup feta cheese (crumbled)\nOlive oil for drizzling\nSalt and pepper to taste",
            'steps' => "1. Warm pita bread in a toaster or on the stovetop.\n2. Spread a generous layer of hummus on each pita.\n3. Layer cucumber, bell pepper, tomato, red onion, mixed greens, Kalamata olives, and feta cheese on top of the hummus.\n4. Drizzle with olive oil and season with salt and pepper.\n5. Fold the pita in half and secure with a toothpick.\n6. Serve immediately.",
            'image' => 'http://10.0.2.2:8000/images/veggie_pita_wraps.jpg',
            'calorie' => 350,
            'servings' => 4,
            'time' => 15,
            'user_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe21->categories()->attach([1, 2, 8, 9, 14]); // Attach categories with IDs 2 and 5

        // Recipe 22 (Berry Blast Smoothie)
        $recipe22 = Recipe::create([
            'recipe_name' => 'Berry Blast Smoothie',
            'caption' => 'A refreshing and antioxidant-packed smoothie bursting with mixed berries.',
            'ingredients' => "1 cup mixed berries (strawberries, blueberries, raspberries)\n1 banana (sliced)\n1/2 cup Greek yogurt\n1/2 cup almond milk\n1 tablespoon honey\n1/2 teaspoon chia seeds\nIce cubes",
            'steps' => "1. Combine mixed berries, banana, Greek yogurt, almond milk, honey, and chia seeds in a blender.\n2. Blend until smooth and creamy.\n3. Add ice cubes and blend again until desired consistency.\n4. Pour into a glass and garnish with additional berries if desired.\n5. Enjoy your Berry Blast Smoothie!",
            'image' => 'http://10.0.2.2:8000/images/berry_blast_smoothie.jpg',
            'calorie' => 200,
            'servings' => 2,
            'time' => 10,
            'user_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe22->categories()->attach([3, 4, 8, 14, 16]); // Attach categories with IDs 4 and 8

        // Recipe 23 (Tropical Paradise Smoothie)
        $recipe23 = Recipe::create([
            'recipe_name' => 'Tropical Paradise Smoothie',
            'caption' => 'Escape to a tropical paradise with this delicious and fruity smoothie.',
            'ingredients' => "1 cup pineapple chunks\n1/2 cup mango chunks\n1/2 banana\n1/2 cup coconut milk\n1/2 cup orange juice\n1 tablespoon flaxseeds\nIce cubes",
            'steps' => "1. In a blender, combine pineapple chunks, mango chunks, banana, coconut milk, orange juice, and flaxseeds.\n2. Blend until smooth and creamy.\n3. Add ice cubes and blend again until desired consistency.\n4. Pour into a glass and imagine yourself in a tropical paradise.\n5. Sip and enjoy!",
            'image' => 'http://10.0.2.2:8000/images/tropical_paradise_smoothie.jpg',
            'calorie' => 180,
            'servings' => 2,
            'time' => 8,
            'user_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe23->categories()->attach([3, 4, 8, 14, 16]); // Attach categories with IDs 4 and 8

        // Recipe 24 (Green Goddess Smoothie)
        $recipe24 = Recipe::create([
            'recipe_name' => 'Green Goddess Smoothie',
            'caption' => 'A nutrient-packed green smoothie that will make you feel like a goddess!',
            'ingredients' => "1 cup spinach leaves\n1/2 cucumber (peeled and sliced)\n1/2 avocado\n1/2 banana\n1 cup coconut water\nJuice of 1 lime\n1 tablespoon chia seeds\nIce cubes",
            'steps' => "1. Combine spinach leaves, cucumber, avocado, banana, coconut water, lime juice, and chia seeds in a blender.\n2. Blend until the mixture is smooth and vibrant green.\n3. Add ice cubes and blend again until the desired thickness.\n4. Pour into a glass and embrace the green goddess within.\n5. Sip and enjoy the goodness!",
            'image' => 'http://10.0.2.2:8000/images/green_goddess_smoothie.jpg',
            'calorie' => 220,
            'servings' => 2,
            'time' => 12,
            'user_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe24->categories()->attach([3, 4, 8, 14, 16, 17]); // Attach categories with IDs 4 and 8

        // Recipe 25 (Homestyle Chicken Pot Pie)
        $recipe25 = Recipe::create([
            'recipe_name' => 'Homestyle Chicken Pot Pie',
            'caption' => 'A comforting and classic chicken pot pie that brings warmth to the family table.',
            'ingredients' => "2 cups cooked chicken (shredded)\n1 cup frozen mixed vegetables\n1/3 cup unsalted butter\n1/3 cup all-purpose flour\n1/2 teaspoon salt\n1/4 teaspoon black pepper\n1/4 teaspoon dried thyme\n1 3/4 cups chicken broth\n2/3 cup milk\n1 package refrigerated pie crusts",
            'steps' => "1. Preheat the oven to 425°F (220°C).\n2. In a saucepan, melt butter over medium heat. Stir in flour, salt, pepper, and dried thyme until well combined.\n3. Gradually whisk in chicken broth and milk, cooking and stirring until thickened.\n4. Stir in shredded chicken and mixed vegetables until evenly coated.\n5. Roll out one pie crust and place it in a greased pie dish.\n6. Pour the chicken mixture into the pie crust.\n7. Roll out the second pie crust and place it over the filling. Seal the edges and cut slits in the top crust for ventilation.\n8. Bake for 30-35 minutes or until the crust is golden brown.\n9. Allow to cool slightly before serving this homestyle delight!",
            'image' => 'http://10.0.2.2:8000/images/chicken_pot_pie.jpg',
            'calorie' => 400,
            'servings' => 6,
            'time' => 60,
            'user_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe25->categories()->attach([2, 7, 13, 15]); // Attach categories with IDs 2 and 7

        // Recipe 26 (Family-Favorite Spaghetti and Meatballs)
        $recipe26 = Recipe::create([
            'recipe_name' => 'Family-Favorite Spaghetti and Meatballs',
            'caption' => 'A classic and hearty Italian dish that brings the family together for a delicious meal.',
            'ingredients' => "1 pound ground beef\n1/2 cup breadcrumbs\n1/4 cup grated Parmesan cheese\n1/4 cup fresh parsley (chopped)\n1 clove garlic (minced)\n1 large egg\n1 jar marinara sauce\n1 pound spaghetti\nSalt and black pepper to taste",
            'steps' => "1. Preheat the oven to 375°F (190°C).\n2. In a bowl, combine ground beef, breadcrumbs, Parmesan cheese, chopped parsley, minced garlic, and beaten egg.\n3. Form the mixture into meatballs and place them on a baking sheet.\n4. Bake meatballs for 20-25 minutes or until cooked through.\n5. In a pot, heat marinara sauce over medium heat.\n6. Cook spaghetti according to package instructions.\n7. Serve meatballs over spaghetti and top with marinara sauce.\n8. Sprinkle with additional Parmesan and enjoy this family-favorite dish!",
            'image' => 'http://10.0.2.2:8000/images/spaghetti_meatballs.jpeg',
            'calorie' => 600,
            'servings' => 4,
            'time' => 45,
            'user_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe26->categories()->attach([2, 6, 15]); // Attach categories with IDs 2 and 7

        // Recipe 27 (Cheesy Baked Ziti)
        $recipe27 = Recipe::create([
            'recipe_name' => 'Cheesy Baked Ziti',
            'caption' => 'A cheesy and comforting baked pasta dish that the whole family will love.',
            'ingredients' => "1 pound ziti pasta\n1 jar marinara sauce\n1 pound ricotta cheese\n1 cup mozzarella cheese (shredded)\n1/2 cup Parmesan cheese (grated)\n1 teaspoon dried oregano\n1 teaspoon dried basil\nSalt and black pepper to taste",
            'steps' => "1. Preheat the oven to 375°F (190°C).\n2. Cook ziti pasta according to package instructions.\n3. In a bowl, combine ricotta cheese, mozzarella cheese, Parmesan cheese, dried oregano, dried basil, salt, and black pepper.\n4. In a baking dish, layer cooked ziti, marinara sauce, and cheese mixture.\n5. Repeat the layers, finishing with a layer of cheese on top.\n6. Bake for 25-30 minutes or until bubbly and golden brown.\n7. Let it cool slightly before serving this cheesy delight to the family!",
            'image' => 'http://10.0.2.2:8000/images/cheesy_baked_ziti.jpg',
            'calorie' => 500,
            'servings' => 6,
            'time' => 40,
            'user_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe27->categories()->attach([2, 6]); // Attach categories with IDs 2 and 7

        // Recipe 28 (Grilled Chicken Salad)
        $recipe28 = Recipe::create([
            'recipe_name' => 'Grilled Chicken Salad',
            'caption' => 'A healthy and flavorful salad with grilled chicken for a nutritious meal.',
            'ingredients' => "2 boneless, skinless chicken breasts\n1 tablespoon olive oil\n1 teaspoon paprika\n1 teaspoon garlic powder\nSalt and black pepper to taste\n6 cups mixed salad greens\n1 cup cherry tomatoes (halved)\n1 cucumber (sliced)\n1/4 cup red onion (thinly sliced)\n1/4 cup feta cheese (crumbled)\n1/4 cup balsamic vinaigrette dressing",
            'steps' => "1. Preheat the grill to medium-high heat.\n2. Rub chicken breasts with olive oil, paprika, garlic powder, salt, and black pepper.\n3. Grill chicken for 6-8 minutes per side or until cooked through.\n4. Let chicken rest for a few minutes before slicing.\n5. In a large bowl, combine mixed salad greens, cherry tomatoes, cucumber, red onion, and feta cheese.\n6. Top the salad with grilled chicken slices.\n7. Drizzle with balsamic vinaigrette dressing.\n8. Toss gently and serve this nutritious grilled chicken salad!",
            'image' => 'http://10.0.2.2:8000/images/grilled_chicken_salad.jpg',
            'calorie' => 300,
            'servings' => 2,
            'time' => 30,
            'user_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe28->categories()->attach([2, 8, 12, 14, 15, 16]); // Attach categories with IDs 1 and 8

        // Recipe 29 (Quinoa and Avocado Bowl)
        $recipe29 = Recipe::create([
            'recipe_name' => 'Quinoa and Avocado Bowl',
            'caption' => 'A nutrient-packed bowl with quinoa, avocado, and fresh veggies for a light and satisfying meal.',
            'ingredients' => "1 cup quinoa (cooked)\n1 avocado (sliced)\n1 cup cherry tomatoes (halved)\n1/2 cup black beans (canned, rinsed, and drained)\n1/4 cup red onion (chopped)\n1/4 cup cilantro (chopped)\n1 lime (juiced)\n2 tablespoons olive oil\nSalt and black pepper to taste",
            'steps' => "1. In a bowl, combine cooked quinoa, sliced avocado, cherry tomatoes, black beans, red onion, and cilantro.\n2. In a small bowl, whisk together lime juice, olive oil, salt, and black pepper to create a dressing.\n3. Pour the dressing over the quinoa mixture and toss gently.\n4. Serve this quinoa and avocado bowl for a refreshing and wholesome meal!",
            'image' => 'http://10.0.2.2:8000/images/quinoa_avocado_bowl.jpeg',
            'calorie' => 350,
            'servings' => 2,
            'time' => 20,
            'user_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe29->categories()->attach([1, 2, 5, 8, 11, 14, 16, 17]); // Attach categories with IDs 2 and 8

        // Recipe 30 (Stir-Fried Tofu with Vegetables)
        $recipe30 = Recipe::create([
            'recipe_name' => 'Stir-Fried Tofu with Vegetables',
            'caption' => 'A protein-packed and veggie-filled stir-fry for a wholesome and balanced meal.',
            'ingredients' => "1 block extra-firm tofu (pressed and cubed)\n2 tablespoons soy sauce\n1 tablespoon sesame oil\n1 tablespoon olive oil\n2 cloves garlic (minced)\n1 cup broccoli florets\n1 bell pepper (sliced)\n1 carrot (julienned)\n1 cup snap peas\n1 tablespoon ginger (minced)\nGreen onions for garnish\nCooked brown rice for serving",
            'steps' => "1. In a bowl, toss cubed tofu with soy sauce and sesame oil. Let it marinate for 15 minutes.\n2. Heat olive oil in a wok or skillet over medium-high heat.\n3. Add minced garlic and stir-fry until fragrant.\n4. Add marinated tofu and cook until golden brown on all sides.\n5. Add broccoli, bell pepper, carrot, snap peas, and minced ginger. Stir-fry until vegetables are tender-crisp.\n6. Serve stir-fried tofu and vegetables over cooked brown rice.\n7. Garnish with green onions and enjoy this delicious and wholesome stir-fry!",
            'image' => 'http://10.0.2.2:8000/images/stir_fried_tofu_vegetables.jpg',
            'calorie' => 400,
            'servings' => 2,
            'time' => 25,
            'user_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe30->categories()->attach([2, 8, 11, 13, 14, 15, 16]); // Attach categories with IDs 1 and 8

        // Recipe 31 (Triple Chocolate Brownies)
        $recipe31 = Recipe::create([
            'recipe_name' => 'Triple Chocolate Brownies',
            'caption' => 'Indulge in the decadence of triple chocolate brownies for the ultimate sweet treat.',
            'ingredients' => "1 cup unsalted butter\n2 cups granulated sugar\n4 large eggs\n1 teaspoon vanilla extract\n1 cup all-purpose flour\n1/2 cup cocoa powder\n1/4 teaspoon salt\n1 cup semisweet chocolate chips\n1 cup white chocolate chips\n1 cup milk chocolate chips",
            'steps' => "1. Preheat the oven to 350°F (175°C). Grease and flour a baking pan.\n2. In a saucepan, melt the butter. Remove from heat and stir in sugar until well combined.\n3. Beat in eggs, one at a time, then stir in vanilla extract.\n4. In a separate bowl, whisk together flour, cocoa powder, and salt. Gradually add to the wet ingredients, mixing until just combined.\n5. Fold in semisweet, white, and milk chocolate chips.\n6. Pour the batter into the prepared baking pan.\n7. Bake for 25-30 minutes or until a toothpick inserted in the center comes out with moist crumbs.\n8. Allow to cool before cutting into squares.",
            'image' => 'http://10.0.2.2:8000/images/triple_chocolate_brownies_1.jpg',
            'calorie' => 300,
            'servings' => 12,
            'time' => 40,
            'user_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe31->categories()->attach([3, 9]); // Attach categories with IDs 5 and 9

        // Recipe 32 (Classic Tiramisu)
        $recipe32 = Recipe::create([
            'recipe_name' => 'Classic Tiramisu',
            'caption' => 'Savor the rich and velvety layers of classic tiramisu with a hint of coffee and cocoa.',
            'ingredients' => "6 large egg yolks\n3/4 cup granulated sugar\n1 cup mascarpone cheese\n1 1/2 cups heavy cream\n1 cup strong brewed coffee, cooled\n3 tablespoons coffee liqueur (optional)\nLadyfinger cookies\nCocoa powder for dusting",
            'steps' => "1. In a heatproof bowl, whisk together egg yolks and sugar. Place the bowl over a pot of simmering water, whisking constantly until the mixture thickens.\n2. Remove from heat and let it cool. Once cooled, fold in mascarpone cheese until smooth.\n3. In a separate bowl, whip heavy cream until stiff peaks form. Gently fold the whipped cream into the mascarpone mixture.\n4. In a shallow dish, combine brewed coffee and coffee liqueur if using.\n5. Dip ladyfinger cookies into the coffee mixture and layer them in the bottom of a serving dish.\n6. Spread half of the mascarpone mixture over the ladyfingers.\n7. Repeat the layers, finishing with a dusting of cocoa powder on top.\n8. Refrigerate for at least 4 hours or overnight before serving.",
            'image' => 'http://10.0.2.2:8000/images/classic_tiramisu.jpg',
            'calorie' => 250,
            'servings' => 8,
            'time' => 45,
            'user_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe32->categories()->attach([3, 9]); // Attach categories with IDs 5 and 9

        // Recipe 33 (Raspberry Cheesecake Bars)
        $recipe33 = Recipe::create([
            'recipe_name' => 'Raspberry Cheesecake Bars',
            'caption' => 'Enjoy the delightful combination of creamy cheesecake and tangy raspberry swirls in these bars.',
            'ingredients' => "1 1/2 cups graham cracker crumbs\n1/2 cup unsalted butter, melted\n16 oz cream cheese, softened\n1/2 cup granulated sugar\n2 large eggs\n1 teaspoon vanilla extract\n1/2 cup raspberry preserves",
            'steps' => "1. Preheat the oven to 325°F (160°C). Line a baking pan with parchment paper.\n2. In a bowl, combine graham cracker crumbs and melted butter. Press the mixture into the bottom of the prepared pan.\n3. In a large bowl, beat cream cheese and sugar until smooth. Add eggs one at a time, then stir in vanilla extract.\n4. Pour the cream cheese mixture over the crust.\n5. Heat raspberry preserves until slightly melted. Drop spoonfuls over the cream cheese layer and swirl with a knife.\n6. Bake for 30-35 minutes or until the edges are set and the center is slightly jiggly.\n7. Allow to cool completely before refrigerating for at least 4 hours.\n8. Cut into bars and serve.",
            'image' => 'http://10.0.2.2:8000/images/raspberry_cheesecake_bars.jpg',
            'calorie' => 220,
            'servings' => 16,
            'time' => 50,
            'user_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe33->categories()->attach([3, 9]); // Attach categories with IDs 5 and 9

        // Recipe 34 (Quinoa Salad with Roasted Vegetables)
        $recipe34 = Recipe::create([
            'recipe_name' => 'Quinoa Salad with Roasted Vegetables',
            'caption' => 'A nutrient-packed quinoa salad featuring a medley of roasted vegetables.',
            'ingredients' => "1 cup quinoa, 2 cups mixed vegetables (e.g., bell peppers, zucchini, cherry tomatoes), 2 tablespoons olive oil, 1 teaspoon dried herbs (e.g., oregano, thyme), Salt and pepper to taste, 1/4 cup feta cheese (optional), Fresh lemon juice for dressing",
            'steps' => "1. Rinse quinoa under cold water and cook according to package instructions.\n2. Preheat the oven to 400°F (200°C).\n3. Toss mixed vegetables with olive oil, dried herbs, salt, and pepper.\n4. Spread vegetables on a baking sheet and roast for 20-25 minutes or until tender.\n5. In a large bowl, combine cooked quinoa and roasted vegetables.\n6. Drizzle with fresh lemon juice and toss.\n7. Top with crumbled feta cheese if desired.\n8. Serve chilled or at room temperature.",
            'image' => 'http://10.0.2.2:8000/images/quinoa_salad_with_roasted_vegetables.jpg',
            'calorie' => 300,
            'servings' => 4,
            'time' => 40,
            'user_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe34->categories()->attach([1, 2, 8, 11, 12, 14, 16, 17]); // Attach categories with IDs 2 and 7

        // Recipe 35 (Grilled Chicken and Avocado Wrap)
        $recipe35 = Recipe::create([
            'recipe_name' => 'Grilled Chicken and Avocado Wrap',
            'caption' => 'A satisfying and healthy wrap with grilled chicken, avocado, and fresh veggies.',
            'ingredients' => "2 boneless, skinless chicken breasts, 1 tablespoon olive oil, 1 teaspoon cumin, 1 teaspoon paprika, Salt and pepper to taste, Whole-grain wraps, 1 avocado (sliced), 1 cup cherry tomatoes (halved), 1/2 cup shredded lettuce, Greek yogurt or tzatziki for dressing",
            'steps' => "1. Preheat the grill or grill pan.\n2. Rub chicken breasts with olive oil, cumin, paprika, salt, and pepper.\n3. Grill chicken for 6-8 minutes per side or until cooked through.\n4. Slice grilled chicken into strips.\n5. Warm whole-grain wraps.\n6. Assemble wraps with grilled chicken, sliced avocado, cherry tomatoes, and shredded lettuce.\n7. Drizzle with Greek yogurt or tzatziki.\n8. Wrap and enjoy!",
            'image' => 'http://10.0.2.2:8000/images/grilled_chicken_and_avocado_wrap.jpg',
            'calorie' => 350,
            'servings' => 2,
            'time' => 30,
            'user_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe35->categories()->attach([2, 8, 12, 15, 14, 16]); // Attach categories with IDs 2 and 7

        // Recipe 36 (Mango Coconut Chia Pudding)
        $recipe36 = Recipe::create([
            'recipe_name' => 'Mango Coconut Chia Pudding',
            'caption' => 'A refreshing and nutritious chia pudding with the tropical flavor of mango and coconut.',
            'ingredients' => "1/4 cup chia seeds, 1 cup coconut milk, 1 tablespoon honey or maple syrup, 1/2 teaspoon vanilla extract, Fresh mango slices for topping, Shredded coconut for garnish",
            'steps' => "1. In a bowl, combine chia seeds, coconut milk, honey or maple syrup, and vanilla extract.\n2. Stir well to ensure chia seeds are evenly distributed.\n3. Cover and refrigerate for at least 4 hours or overnight.\n4. Before serving, give the chia pudding a good stir.\n5. Spoon into serving glasses or bowls.\n6. Top with fresh mango slices and a sprinkle of shredded coconut.\n7. Enjoy this delightful and healthy dessert!",
            'image' => 'http://10.0.2.2:8000/images/mango_coconut_chia_pudding.jpg',
            'calorie' => 200,
            'servings' => 2,
            'time' => 240,
            'user_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe36->categories()->attach([3, 9]); // Attach categories with IDs 2 and 7

        // Recipe 37 (Truffle Risotto with Wild Mushrooms)
        $recipe37 = Recipe::create([
            'recipe_name' => 'Truffle Risotto with Wild Mushrooms',
            'caption' => 'An indulgent and aromatic truffle-infused risotto with a medley of wild mushrooms.',
            'ingredients' => "1 cup Arborio rice, 1/2 cup dry white wine, 4 cups vegetable or chicken broth (kept warm), 1 shallot (finely chopped), 2 cloves garlic (minced), 1 cup mixed wild mushrooms (e.g., shiitake, chanterelle), 2 tablespoons truffle oil, 1/2 cup Parmesan cheese (grated), Salt and black pepper to taste, Fresh parsley for garnish",
            'steps' => "1. In a large skillet, sauté chopped shallot and minced garlic in olive oil until translucent.\n2. Add Arborio rice and cook for 1-2 minutes until rice is lightly toasted.\n3. Pour in the white wine and stir until absorbed.\n4. Begin adding warm broth, one ladle at a time, stirring frequently. Wait until the liquid is absorbed before adding more.\n5. In a separate pan, sauté wild mushrooms in truffle oil until tender.\n6. Continue adding broth until the rice is creamy and cooked to al dente.\n7. Stir in sautéed wild mushrooms and Parmesan cheese.\n8. Season with salt and black pepper to taste.\n9. Garnish with fresh parsley before serving.",
            'image' => 'http://10.0.2.2:8000/images/truffle_risotto_with_wild_mushrooms.jpg',
            'calorie' => 500,
            'servings' => 2,
            'time' => 45,
            'user_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe37->categories()->attach([2, 14]); // Attach categories with IDs 8 and 9

        // Recipe 38 (Lobster Thermidor)
        $recipe38 = Recipe::create([
            'recipe_name' => 'Lobster Thermidor',
            'caption' => 'A classic French dish featuring lobster in a creamy brandy-infused sauce.',
            'ingredients' => "2 lobster tails, 1/4 cup brandy, 1/2 cup heavy cream, 2 tablespoons Dijon mustard, 2 tablespoons butter, 1 shallot (finely chopped), 2 cloves garlic (minced), Fresh tarragon for garnish, Salt and black pepper to taste",
            'steps' => "1. Preheat the oven to 400°F (200°C).\n2. Cut lobster tails in half lengthwise and remove the meat.\n3. In a skillet, sauté chopped shallot and minced garlic in butter until softened.\n4. Add lobster meat and cook until opaque.\n5. Pour in brandy and let it simmer.\n6. Stir in Dijon mustard and heavy cream, cooking until the sauce thickens.\n7. Season with salt and black pepper.\n8. Spoon the lobster mixture back into the shells.\n9. Place lobster shells in a baking dish and bake until golden brown.\n10. Garnish with fresh tarragon before serving.",
            'image' => 'http://10.0.2.2:8000/images/lobster_thermidor.jpeg',
            'calorie' => 600,
            'servings' => 2,
            'time' => 30,
            'user_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe38->categories()->attach([2, 15]); // Attach categories with IDs 8 and 9

        // Recipe 39 (Beef Wellington)
        $recipe39 = Recipe::create([
            'recipe_name' => 'Beef Wellington',
            'caption' => 'A show-stopping dish featuring tender beef fillet encased in puff pastry with mushroom duxelles.',
            'ingredients' => "2 beef fillets, 1 sheet puff pastry, 200g mushroom duxelles (finely chopped mushrooms, shallots, and garlic sautéed in butter), 2 slices prosciutto, Dijon mustard, Salt and black pepper to taste, Egg wash (1 beaten egg with a splash of water)",
            'steps' => "1. Season beef fillets with salt and black pepper.\n2. Sear fillets in a hot pan until browned on all sides.\n3. Brush fillets with Dijon mustard.\n4. Roll out puff pastry and layer with prosciutto and mushroom duxelles.\n5. Place seared fillets on the pastry and roll tightly.\n6. Seal edges and brush with egg wash.\n7. Bake in a preheated oven at 400°F (200°C) until pastry is golden brown.\n8. Let it rest before slicing and serving.",
            'image' => 'http://10.0.2.2:8000/images/beef_wellington.jpg',
            'calorie' => 700,
            'servings' => 2,
            'time' => 60,
            'user_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe39->categories()->attach([2, 15, 12]); // Attach categories with IDs 8 and 9

        // Recipe 40 (Triple Chocolate Layer Cake)
        $recipe40 = Recipe::create([
            'recipe_name' => 'Triple Chocolate Layer Cake',
            'caption' => 'A decadent and indulgent triple-layered chocolate cake with velvety chocolate ganache.',
            'ingredients' => "2 cups all-purpose flour, 1 cup unsweetened cocoa powder, 2 tsp baking powder, 1 tsp baking soda, 1/2 tsp salt, 1 cup unsalted butter (softened), 2 cups granulated sugar, 4 large eggs, 2 tsp vanilla extract, 1 1/2 cups whole milk, 1 cup dark chocolate (chopped), 1 cup white chocolate (chopped), 1 cup milk chocolate (chopped), 2 cups heavy cream",
            'steps' => "1. Preheat the oven to 350°F (175°C). Grease and flour three 9-inch cake pans.\n2. In a bowl, whisk together flour, cocoa powder, baking powder, baking soda, and salt.\n3. In another bowl, cream together butter and sugar until light and fluffy.\n4. Add eggs one at a time, beating well after each addition. Stir in vanilla extract.\n5. Gradually add the dry ingredients to the wet ingredients, alternating with milk.\n6. Divide the batter evenly among the prepared pans and smooth the tops.\n7. Bake for 25-30 minutes or until a toothpick inserted into the center comes out clean.\n8. Let the cakes cool completely.\n9. For the ganache, heat heavy cream until it simmers, then pour over chopped chocolates. Stir until smooth.\n10. Assemble the cake layers with ganache between each layer and on top. Decorate as desired.",
            'image' => 'http://10.0.2.2:8000/images/triple_chocolate_layer_cake.jpg',
            'calorie' => 500,
            'servings' => 12,
            'time' => 90,
            'user_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe40->categories()->attach([3, 9]); // Attach categories with IDs 10 and 11

        // Recipe 41 (Classic French Macarons)
        $recipe41 = Recipe::create([
            'recipe_name' => 'Classic French Macarons',
            'caption' => 'Delicate and colorful French macarons with a smooth ganache filling.',
            'ingredients' => "1 cup almond flour, 1 3/4 cups powdered sugar, 3 large egg whites, 1/4 cup granulated sugar, Gel food coloring (optional), 1 cup heavy cream, 8 oz white chocolate (chopped)",
            'steps' => "1. Line baking sheets with parchment paper.\n2. Sift together almond flour and powdered sugar.\n3. In a separate bowl, beat egg whites until frothy. Gradually add granulated sugar and continue beating until stiff peaks form.\n4. Gently fold the almond flour mixture into the egg whites until smooth.\n5. If desired, add gel food coloring to achieve the desired color.\n6. Transfer the batter to a piping bag and pipe small rounds onto the prepared baking sheets.\n7. Let the piped macarons sit at room temperature for 30 minutes to form a skin.\n8. Preheat the oven to 300°F (150°C) and bake for 15-18 minutes.\n9. For the ganache, heat heavy cream until it simmers, then pour over chopped white chocolate. Stir until smooth.\n10. Sandwich the macarons with ganache filling.",
            'image' => 'http://10.0.2.2:8000/images/classic_french_macarons.jpg',
            'calorie' => 300,
            'servings' => 24,
            'time' => 120,
            'user_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe41->categories()->attach([3, 9]); // Attach categories with IDs 10 and 11

        // Recipe 42 (Cinnamon Rolls with Cream Cheese Frosting)
        $recipe42 = Recipe::create([
            'recipe_name' => 'Cinnamon Rolls with Cream Cheese Frosting',
            'caption' => 'Soft and gooey cinnamon rolls topped with luscious cream cheese frosting.',
            'ingredients' => "For the dough: 4 cups all-purpose flour, 1/4 cup granulated sugar, 1 packet active dry yeast, 1 cup warm milk, 1/4 cup unsalted butter (melted), 1 large egg, 1 tsp salt. For the filling: 1/2 cup unsalted butter (softened), 1 cup brown sugar, 2 tbsp ground cinnamon. For the cream cheese frosting: 4 oz cream cheese (softened), 1/4 cup unsalted butter (softened), 2 cups powdered sugar, 1 tsp vanilla extract",
            'steps' => "For the dough:\n1. In a bowl, combine warm milk and sugar. Sprinkle yeast over the mixture and let it sit for 5 minutes.\n2. In a large bowl, combine flour and salt. Add the yeast mixture, melted butter, and egg. Mix until a dough forms.\n3. Knead the dough on a floured surface until smooth. Place in a greased bowl and let it rise until doubled in size.\nFor the filling:\n4. Roll out the dough into a rectangle. Spread softened butter, brown sugar, and cinnamon over the surface.\n5. Roll the dough tightly and slice into cinnamon rolls.\n6. Place the rolls in a greased baking pan and let them rise again.\n7. Preheat the oven to 375°F (190°C) and bake for 20-25 minutes.\nFor the cream cheese frosting:\n8. Beat together cream cheese, butter, powdered sugar, and vanilla until smooth.\n9. Frost the warm cinnamon rolls with the cream cheese mixture.",
            'image' => 'http://10.0.2.2:8000/images/cinnamon_rolls.jpg',
            'calorie' => 400,
            'servings' => 12,
            'time' => 180,
            'user_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe42->categories()->attach([1, 9]); // Attach categories with IDs 10 and 11

        // Recipe 43 (Smoked BBQ Ribs)
        $recipe43 = Recipe::create([
            'recipe_name' => 'Smoked BBQ Ribs',
            'caption' => 'Tender and flavorful smoked ribs with a homemade BBQ glaze.',
            'ingredients' => "2 racks baby back ribs, Dry rub (paprika, brown sugar, salt, black pepper, garlic powder, onion powder, cayenne pepper), 1 cup apple juice, 1 cup BBQ sauce (homemade or store-bought)",
            'steps' => "1. Remove the membrane from the back of the ribs and pat them dry.\n2. Rub the dry rub generously over both sides of the ribs.\n3. Let the ribs marinate in the refrigerator for at least 2 hours or overnight.\n4. Preheat your smoker to 225°F (107°C) using applewood or your preferred smoking wood.\n5. Place the ribs on the smoker and cook for 4-6 hours or until the internal temperature reaches 190°F (88°C).\n6. Baste the ribs with apple juice every hour to keep them moist.\n7. During the last hour, brush the ribs with BBQ sauce for a caramelized finish.\n8. Let the ribs rest for 15 minutes before slicing and serving.",
            'image' => 'http://10.0.2.2:8000/images/smoked_bbq_ribs.jpeg',
            'calorie' => 450,
            'servings' => 6,
            'time' => 360,
            'user_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe43->categories()->attach([2, 15, 12]); // Attach categories with IDs 3 and 4

        // Recipe 44 (Grilled Shrimp Skewers)
        $recipe44 = Recipe::create([
            'recipe_name' => 'Grilled Shrimp Skewers',
            'caption' => 'Quick and tasty grilled shrimp skewers with zesty marinade.',
            'ingredients' => "1 lb large shrimp (peeled and deveined), 2 tbsp olive oil, 2 cloves garlic (minced), 1 lemon (juiced), 1 tsp smoked paprika, 1 tsp dried oregano, Salt and pepper to taste, Wooden skewers (soaked in water)",
            'steps' => "1. In a bowl, mix olive oil, minced garlic, lemon juice, smoked paprika, dried oregano, salt, and pepper to create the marinade.\n2. Add the peeled and deveined shrimp to the marinade, ensuring they are well-coated.\n3. Thread the shrimp onto soaked wooden skewers.\n4. Preheat the grill to medium-high heat.\n5. Grill the shrimp skewers for 2-3 minutes per side or until they are opaque and cooked through.\n6. Serve the grilled shrimp skewers with your favorite dipping sauce or a squeeze of lemon.",
            'image' => 'http://10.0.2.2:8000/images/grilled_shrimp_skewers_1.jpg',
            'calorie' => 200,
            'servings' => 4,
            'time' => 20,
            'user_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe44->categories()->attach([2, 15]); // Attach categories with IDs 3 and 4

        // Recipe 45 (Grilled Vegetable Platter)
        $recipe45 = Recipe::create([
            'recipe_name' => 'Grilled Vegetable Platter',
            'caption' => 'Colorful and savory grilled vegetables served as a delightful platter.',
            'ingredients' => "1 zucchini (sliced), 1 eggplant (sliced), 1 bell pepper (sliced), 1 red onion (sliced), 2 tbsp olive oil, 2 cloves garlic (minced), 1 tsp dried thyme, Salt and pepper to taste, Balsamic glaze for drizzling",
            'steps' => "1. Preheat the grill to medium-high heat.\n2. In a bowl, toss sliced zucchini, eggplant, bell pepper, and red onion with olive oil, minced garlic, dried thyme, salt, and pepper.\n3. Place the vegetables on the grill and cook for 5-7 minutes per side or until they are tender and have grill marks.\n4. Arrange the grilled vegetables on a platter.\n5. Drizzle balsamic glaze over the vegetables before serving.",
            'image' => 'http://10.0.2.2:8000/images/grilled_vegetable_platter.jpg',
            'calorie' => 150,
            'servings' => 4,
            'time' => 30,
            'user_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe45->categories()->attach([2, 5, 14, 16, 17, 11]); // Attach categories with IDs 3 and 5

        // Recipe 46 (Sushi Burrito)
        $recipe46 = Recipe::create([
            'recipe_name' => 'Sushi Burrito',
            'caption' => 'A fusion of Japanese sushi and Mexican burrito in one delightful dish.',
            'ingredients' => "2 sheets nori (seaweed), 2 cups sushi rice, 1/2 lb sushi-grade salmon (thinly sliced), 1/2 avocado (sliced), 1 cucumber (julienned), 1 carrot (julienned), Soy sauce for dipping, Pickled ginger and wasabi for serving",
            'steps' => "1. Lay out a sheet of nori on a bamboo sushi rolling mat.\n2. Wet your hands and spread sushi rice evenly over the nori, leaving a border at the top.\n3. Arrange sliced salmon, avocado, cucumber, and carrot along the bottom of the rice.\n4. Roll the sushi burrito tightly using the bamboo mat.\n5. Wet the border of nori to seal the burrito.\n6. Slice the burrito into bite-sized pieces.\n7. Serve with soy sauce, pickled ginger, and wasabi.",
            'image' => 'http://10.0.2.2:8000/images/sushi_burrito.jpg',
            'calorie' => 350,
            'servings' => 2,
            'time' => 30,
            'user_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe46->categories()->attach([13, 2, 9]); // Attach categories with IDs 1 and 2

        // Recipe 47 (Cauliflower Pizza Crust)
        $recipe47 = Recipe::create([
            'recipe_name' => 'Cauliflower Pizza Crust',
            'caption' => 'A gluten-free and low-carb pizza crust alternative made with cauliflower.',
            'ingredients' => "1 medium cauliflower head, 1 egg, 1/2 cup mozzarella cheese (shredded), 1 tsp dried oregano, 1/2 tsp garlic powder, Salt and pepper to taste, Pizza sauce, Cheese, and your favorite toppings",
            'steps' => "1. Preheat the oven to 400°F (200°C).\n2. Cut cauliflower into florets and pulse in a food processor until it resembles rice.\n3. Microwave cauliflower rice for 5 minutes, then let it cool.\n4. Place cauliflower in a clean kitchen towel and squeeze out excess moisture.\n5. In a bowl, mix cauliflower, egg, shredded mozzarella, dried oregano, garlic powder, salt, and pepper.\n6. Press the mixture onto a parchment-lined baking sheet to form a pizza crust.\n7. Bake for 15-20 minutes or until the crust is golden brown.\n8. Add pizza sauce, cheese, and your favorite toppings.\n9. Bake for an additional 10-12 minutes until the cheese is melted and bubbly.",
            'image' => 'http://10.0.2.2:8000/images/cauliflower_pizza_crust.jpeg',
            'calorie' => 250,
            'servings' => 2,
            'time' => 45,
            'user_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe47->categories()->attach([2, 14, 16]); // Attach categories with IDs 1 and 5

        // Recipe 48 (Matcha Green Tea Pancakes)
        $recipe48 = Recipe::create([
            'recipe_name' => 'Matcha Green Tea Pancakes',
            'caption' => 'Delicious and vibrant green tea pancakes infused with matcha flavor.',
            'ingredients' => "1 cup all-purpose flour, 1 tbsp matcha green tea powder, 2 tbsp sugar, 1 tsp baking powder, 1/2 tsp baking soda, 1/4 tsp salt, 3/4 cup buttermilk, 1 egg, 2 tbsp unsalted butter (melted), Maple syrup for serving",
            'steps' => "1. In a bowl, whisk together flour, matcha powder, sugar, baking powder, baking soda, and salt.\n2. In another bowl, whisk buttermilk, egg, and melted butter.\n3. Pour wet ingredients into dry ingredients and mix until just combined.\n4. Heat a griddle or non-stick skillet over medium heat.\n5. Pour 1/4 cup of batter for each pancake onto the griddle.\n6. Cook until bubbles form on the surface, then flip and cook until the other side is golden brown.\n7. Serve with maple syrup.",
            'image' => 'http://10.0.2.2:8000/images/matcha_green_tea_pancakes.jpeg',
            'calorie' => 300,
            'servings' => 4,
            'time' => 20,
            'user_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe48->categories()->attach([1, 8, 9, 13, 14]); // Attach categories with IDs 2 and 6

        // Recipe 49 (Quinoa and Black Bean Salad)
        $recipe49 = Recipe::create([
            'recipe_name' => 'Quinoa and Black Bean Salad',
            'caption' => 'A protein-packed and nutritious salad with quinoa, black beans, and fresh veggies.',
            'ingredients' => "1 cup quinoa, 1 can black beans (drained and rinsed), 1 cup cherry tomatoes (halved), 1/2 cup red bell pepper (diced), 1/4 cup red onion (chopped), 1/4 cup fresh cilantro (chopped), 2 tbsp olive oil, 1 lime (juiced), Salt and pepper to taste.",
            'steps' => "1. Cook quinoa according to package instructions.\n2. In a large bowl, combine cooked quinoa, black beans, cherry tomatoes, red bell pepper, red onion, and cilantro.\n3. In a small bowl, whisk together olive oil, lime juice, salt, and pepper.\n4. Pour the dressing over the salad and toss to combine.\n5. Chill in the refrigerator for at least 30 minutes before serving.",
            'image' => 'http://10.0.2.2:8000/images/quinoa_black_bean_salad.jpg',
            'calorie' => 300,
            'servings' => 2,
            'time' => 25,
            'user_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe49->categories()->attach([1, 5, 11, 8, 14, 16, 17]); // Attach categories with IDs 1 and 5

        // Recipe 50 (Grilled Chicken and Vegetable Skewers)
        $recipe50 = Recipe::create([
            'recipe_name' => 'Grilled Chicken and Vegetable Skewers',
            'caption' => 'Delicious and healthy skewers with marinated chicken and colorful veggies.',
            'ingredients' => "2 boneless, skinless chicken breasts (cut into chunks), 1 zucchini (sliced), 1 bell pepper (cut into squares), 1 red onion (cut into wedges), 1 cup cherry tomatoes, 2 tbsp olive oil, 1 tsp dried oregano, 1 tsp smoked paprika, Salt and pepper to taste.",
            'steps' => "1. In a bowl, combine chicken chunks, zucchini, bell pepper, red onion, and cherry tomatoes.\n2. In a small bowl, mix olive oil, dried oregano, smoked paprika, salt, and pepper to make the marinade.\n3. Thread the chicken and vegetables onto skewers.\n4. Brush the skewers with the marinade.\n5. Preheat the grill and cook skewers for 10-12 minutes, turning occasionally.\n6. Serve hot with your favorite dipping sauce.",
            'image' => 'http://10.0.2.2:8000/images/grilled_chicken_vegetable_skewers.jpg',
            'calorie' => 350,
            'servings' => 4,
            'time' => 30,
            'user_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe50->categories()->attach([15, 2, 14, 16]); // Attach categories with IDs 3 and 4

        // Recipe 51 (Berry Protein Smoothie Bowl)
        $recipe51 = Recipe::create([
            'recipe_name' => 'Berry Protein Smoothie Bowl',
            'caption' => 'A refreshing and protein-packed smoothie bowl with mixed berries and toppings.',
            'ingredients' => "1 cup mixed berries (strawberries, blueberries, raspberries), 1 frozen banana, 1/2 cup Greek yogurt, 1 scoop vanilla protein powder, 1/4 cup almond milk, Toppings: granola, chia seeds, sliced almonds, fresh berries.",
            'steps' => "1. In a blender, combine mixed berries, frozen banana, Greek yogurt, protein powder, and almond milk.\n2. Blend until smooth and creamy.\n3. Pour the smoothie into a bowl.\n4. Top with granola, chia seeds, sliced almonds, and fresh berries.\n5. Enjoy with a spoon!",
            'image' => 'http://10.0.2.2:8000/images/berry_protein_smoothie_bowl.jpg',
            'calorie' => 250,
            'servings' => 2,
            'time' => 10,
            'user_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe51->categories()->attach([4, 15, 8]); // Attach categories with IDs 2 and 5

        // Recipe 52 (Salted Caramel Brownies)
        $recipe52 = Recipe::create([
            'recipe_name' => 'Salted Caramel Brownies',
            'caption' => 'Indulgent and gooey brownies with a sweet and salty twist of salted caramel.',
            'ingredients' => "1 cup unsalted butter, 2 cups granulated sugar, 4 large eggs, 1 tsp vanilla extract, 1/2 cup cocoa powder, 1 cup all-purpose flour, 1/4 tsp salt, 1 cup caramel sauce (store-bought or homemade), Sea salt for sprinkling.",
            'steps' => "1. Preheat the oven to 350°F (175°C) and grease a baking pan.\n2. In a saucepan, melt the butter over low heat.\n3. Remove from heat and stir in sugar, eggs, and vanilla extract.\n4. In a separate bowl, sift together cocoa powder, flour, and salt.\n5. Add the dry ingredients to the wet ingredients and mix until combined.\n6. Pour half of the batter into the prepared pan.\n7. Drizzle caramel sauce over the batter.\n8. Pour the remaining batter on top.\n9. Use a knife to swirl the batter and caramel.\n10. Bake for 25-30 minutes or until a toothpick comes out with moist crumbs.\n11. Sprinkle sea salt over the brownies while they're still warm.\n12. Let them cool before cutting into squares.",
            'image' => 'http://10.0.2.2:8000/images/salted_caramel_brownies.jpg',
            'calorie' => 350,
            'servings' => 12,
            'time' => 45,
            'user_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe52->categories()->attach([3, 9]); // Attach categories with IDs 5 and 6

        // Recipe 53 (Vanilla Bean Panna Cotta)
        $recipe53 = Recipe::create([
            'recipe_name' => 'Vanilla Bean Panna Cotta',
            'caption' => 'Smooth and creamy Italian dessert infused with real vanilla bean flavor.',
            'ingredients' => "2 cups heavy cream, 1/2 cup granulated sugar, 1 vanilla bean (split lengthwise), 1 tsp vanilla extract, 1 packet gelatin (about 2 1/4 tsp), 3 tbsp cold water, Fresh berries for garnish.",
            'steps' => "1. In a saucepan, combine heavy cream and sugar over medium heat.\n2. Scrape the seeds from the vanilla bean and add both seeds and pod to the cream mixture.\n3. Heat until it almost comes to a simmer, then remove from heat.\n4. In a small bowl, sprinkle gelatin over cold water and let it bloom for 5 minutes.\n5. Remove the vanilla pod from the cream and whisk in the bloomed gelatin.\n6. Stir in vanilla extract.\n7. Pour the mixture into serving glasses or ramekins.\n8. Refrigerate for at least 4 hours or until set.\n9. Garnish with fresh berries before serving.",
            'image' => 'http://10.0.2.2:8000/images/vanilla_bean_panna_cotta.jpg',
            'calorie' => 250,
            'servings' => 4,
            'time' => 240,
            'user_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe53->categories()->attach([3, 9]); // Attach categories with IDs 1 and 2

        // Recipe 54 (Nutella Stuffed Cookies)
        $recipe54 = Recipe::create([
            'recipe_name' => 'Nutella Stuffed Cookies',
            'caption' => 'Irresistibly soft and chewy cookies with a gooey Nutella center.',
            'ingredients' => "2 1/4 cups all-purpose flour, 1/2 tsp baking soda, 1 cup unsalted butter (softened), 1/2 cup granulated sugar, 1 cup packed brown sugar, 2 large eggs, 1 tsp vanilla extract, Nutella for filling.",
            'steps' => "1. Preheat the oven to 375°F (190°C).\n2. In a small bowl, mix flour and baking soda.\n3. In a large bowl, beat butter, granulated sugar, brown sugar, and vanilla until creamy.\n4. Add eggs, one at a time, beating well after each addition.\n5. Gradually add the flour mixture.\n6. Scoop out cookie dough and flatten it in your hand.\n7. Place a small spoonful of Nutella in the center and fold the dough around it.\n8. Seal the edges and place on a baking sheet.\n9. Bake for 9-11 minutes until golden brown.\n10. Cool on wire racks before serving.",
            'image' => 'http://10.0.2.2:8000/images/nutella_stuffed_cookies.jpg',
            'calorie' => 200,
            'servings' => 24,
            'time' => 30,
            'user_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe54->categories()->attach([3, 9]); // Attach categories with IDs 5 and 6

        // Recipe 55 (Avocado Toast with Poached Eggs)
        $recipe55 = Recipe::create([
            'recipe_name' => 'Avocado Toast with Poached Eggs',
            'caption' => 'A nutritious and satisfying breakfast loaded with healthy fats and protein.',
            'ingredients' => "2 slices whole-grain bread, 1 ripe avocado, 2 large eggs, Salt and pepper to taste, Red pepper flakes for garnish, Fresh cilantro for garnish.",
            'steps' => "1. Toast the whole-grain bread slices until golden brown.\n2. Mash the ripe avocado and spread it evenly on the toasted bread.\n3. Poach the eggs to your liking and place them on top of the avocado spread.\n4. Season with salt, pepper, and red pepper flakes.\n5. Garnish with fresh cilantro.\n6. Serve immediately and enjoy this green and protein-packed breakfast.",
            'image' => 'http://10.0.2.2:8000/images/avocado_toast_with_poached_eggs.jpg',
            'calorie' => 350,
            'servings' => 2,
            'time' => 15,
            'user_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe55->categories()->attach([2, 8, 14, 16]); // Attach categories with IDs 2 and 5

        // Recipe 56 (Kale and Quinoa Salad)
        $recipe56 = Recipe::create([
            'recipe_name' => 'Kale and Quinoa Salad',
            'caption' => 'A nutrient-packed salad with kale, quinoa, and a zesty lemon vinaigrette.',
            'ingredients' => "1 cup cooked quinoa, 2 cups chopped kale, 1/2 cup cherry tomatoes (halved), 1/4 cup feta cheese (crumbled), 1/4 cup red onion (sliced), 1/4 cup cucumber (diced), 2 tbsp olive oil, 1 tbsp lemon juice, Salt and pepper to taste.",
            'steps' => "1. In a large bowl, combine cooked quinoa, chopped kale, cherry tomatoes, feta cheese, red onion, and cucumber.\n2. In a small bowl, whisk together olive oil, lemon juice, salt, and pepper to create the vinaigrette.\n3. Drizzle the vinaigrette over the salad and toss until well combined.\n4. Serve immediately as a refreshing and nutrient-rich salad.",
            'image' => 'http://10.0.2.2:8000/images/kale_and_quinoa_salad.jpg',
            'calorie' => 300,
            'servings' => 2,
            'time' => 20,
            'user_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe56->categories()->attach([1, 5, 11, 14, 16, 17]); // Attach categories with IDs 1 and 2

        // Recipe 57 (Spinach and Feta Stuffed Portobello Mushrooms)
        $recipe57 = Recipe::create([
            'recipe_name' => 'Spinach and Feta Stuffed Portobello Mushrooms',
            'caption' => 'A flavorful and low-carb dish with portobello mushrooms stuffed with spinach and feta.',
            'ingredients' => "4 large portobello mushrooms, 2 cups fresh spinach, 1/2 cup feta cheese (crumbled), 2 cloves garlic (minced), 2 tbsp olive oil, Salt and pepper to taste, Fresh parsley for garnish.",
            'steps' => "1. Preheat the oven to 375°F (190°C).\n2. Remove the stems from the portobello mushrooms and clean the caps.\n3. In a skillet, sauté minced garlic in olive oil until fragrant.\n4. Add fresh spinach and cook until wilted.\n5. Remove from heat and stir in crumbled feta cheese.\n6. Stuff the portobello mushroom caps with the spinach and feta mixture.\n7. Place stuffed mushrooms on a baking sheet.\n8. Bake for 20-25 minutes or until mushrooms are tender.\n9. Garnish with fresh parsley before serving.",
            'image' => 'http://10.0.2.2:8000/images/spinach_and_feta_stuffed_portobello_mushrooms.jpg',
            'calorie' => 200,
            'servings' => 4,
            'time' => 30,
            'user_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe57->categories()->attach([2, 14, 16, 17]); // Attach categories with IDs 2 and 5

        // Recipe 58 (Miso Glazed Salmon with Sesame Broccoli)
        $recipe58 = Recipe::create([
            'recipe_name' => 'Miso Glazed Salmon with Sesame Broccoli',
            'caption' => 'A savory and umami-packed dish featuring miso glazed salmon served with sesame-infused broccoli.',
            'ingredients' => "4 salmon fillets, 1/4 cup miso paste, 2 tbsp soy sauce, 1 tbsp maple syrup, 2 cloves garlic (minced), 1 tbsp sesame oil, 1 lb broccoli florets, 2 tbsp sesame seeds, Salt and pepper to taste.",
            'steps' => "1. Preheat the oven to 400°F (200°C).\n2. In a small bowl, whisk together miso paste, soy sauce, maple syrup, minced garlic, and sesame oil to create the glaze.\n3. Place salmon fillets on a baking sheet and brush them with the miso glaze.\n4. Roast salmon in the oven for 15-20 minutes or until cooked through.\n5. Steam or boil broccoli until tender.\n6. Toss broccoli with sesame seeds.\n7. Serve miso glazed salmon over sesame broccoli and enjoy this flavorful culinary adventure.",
            'image' => 'http://10.0.2.2:8000/images/miso_glazed_salmon_with_sesame_broccoli.jpg',
            'calorie' => 400,
            'servings' => 4,
            'time' => 30,
            'user_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe58->categories()->attach([2, 8, 13, 15, 16, 14]); // Attach categories with IDs 3 and 6

        // Recipe 59 (Quinoa-Stuffed Bell Peppers)
        $recipe59 = Recipe::create([
            'recipe_name' => 'Quinoa-Stuffed Bell Peppers',
            'caption' => 'Colorful bell peppers stuffed with quinoa, black beans, corn, and flavorful spices.',
            'ingredients' => "4 large bell peppers, 1 cup cooked quinoa, 1 cup black beans (canned, drained, and rinsed), 1 cup corn kernels, 1 cup diced tomatoes, 1/2 cup red onion (chopped), 1 tsp cumin, 1 tsp chili powder, Salt and pepper to taste, Fresh cilantro for garnish.",
            'steps' => "1. Preheat the oven to 375°F (190°C).\n2. Cut the tops off the bell peppers and remove seeds and membranes.\n3. In a bowl, combine cooked quinoa, black beans, corn, diced tomatoes, red onion, cumin, chili powder, salt, and pepper.\n4. Stuff each bell pepper with the quinoa mixture.\n5. Place stuffed peppers in a baking dish.\n6. Bake for 25-30 minutes or until peppers are tender.\n7. Garnish with fresh cilantro before serving.",
            'image' => 'http://10.0.2.2:8000/images/quinoa_stuffed_bell_peppers.jpg',
            'calorie' => 300,
            'servings' => 4,
            'time' => 40,
            'user_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe59->categories()->attach([1, 2, 11, 14, 16, 17]); // Attach categories with IDs 1 and 2

        // Recipe 60 (Lemon Garlic Shrimp Pasta)
        $recipe60 = Recipe::create([
            'recipe_name' => 'Lemon Garlic Shrimp Pasta',
            'caption' => 'A delightful pasta dish with succulent shrimp, lemon, and garlic flavors.',
            'ingredients' => "8 oz linguine pasta, 1 lb large shrimp (peeled and deveined), 4 cloves garlic (minced), Zest of 1 lemon, 2 tbsp lemon juice, 1/4 cup fresh parsley (chopped), 2 tbsp olive oil, Salt and pepper to taste, Grated Parmesan cheese for serving.",
            'steps' => "1. Cook linguine pasta according to package instructions.\n2. In a large skillet, heat olive oil over medium heat.\n3. Add minced garlic and sauté until fragrant.\n4. Add shrimp and cook until pink and opaque.\n5. Toss in cooked pasta, lemon zest, lemon juice, and chopped parsley.\n6. Season with salt and pepper to taste.\n7. Serve with a sprinkle of grated Parmesan cheese.",
            'image' => 'http://10.0.2.2:8000/images/lemon_garlic_shrimp_pasta.jpg',
            'calorie' => 450,
            'servings' => 3,
            'time' => 25,
            'user_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipe60->categories()->attach([2, 6, 15]); // Attach categories with IDs 3 and 4

    }
}
