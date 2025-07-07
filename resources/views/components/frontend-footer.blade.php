 <section class="pt-16 border-t-[1px] border-gray-200 bg-gray-50">
     <div class="container mx-auto rounded-lg grid grid-cols-1 md:grid-cols-3 gap-8 text-white">
         <!-- About Section -->
         <div class="md:col-span-1 text-center bg-[var(--primary)] py-6 rounded-lg shadow-lg">
             <h2 class="text-xl font-semibold text-white mb-6">About Us</h2>
             <p class="sm:text-lg text-center px-4 pb-6 leading-relaxed">
                 सेरोफेरो न्यूज, नेपाल र विश्वभरका ताजा समाचार, विश्लेषण र जानकारीमूलक सामग्री प्रदान गर्ने एक विश्वसनीय
                 डिजिटल पत्रिका हो। हाम्रो उद्देश्य सत्य, निष्पक्ष र गुणस्तरीय पत्रकारितामार्फत पाठकहरूलाई सुसूचित
                 राख्नु हो। समाज, संस्कृति, राजनीति, अर्थतन्त्र र अन्य विविध क्षेत्रका समाचारहरूलाई गहन अध्ययन र
                 विश्लेषणका साथ प्रस्तुत गर्दै हामी पाठकहरूको विश्वास जित्ने प्रयासमा छौँ। हाम्रो टोलीमा अनुभवी पत्रकार
                 र समर्पित सम्पादकहरू छन्, जो हरेक कथालाई सटिक र प्रभावकारी ढङ्गले प्रस्तुत गर्न प्रतिबद्ध छन्। सेरोफेरो
                 न्यूजसँग जोडिएर तपाईं सधैँ एक कदम अगाडि रहनुहोस्!
             </p>
             <a href="{{ route('home') }}"
                 class="text-lg font-bold hover:text-[var(--active)] mb-1 transition-colors duration-200">
                 सेरोफेरो डिजिटल पत्रिका
             </a>
             <p class="text-sm font-semibold">
                 धरान, सुनसरी
             </p>
         </div>

         <!-- Navigation Links -->
         <div class="md:col-span-1 bg-[var(--primary)] py-6 rounded-lg text-center px-4 shadow-lg">
             <h2 class="text-xl font-semibold text-white mb-6">Contact Us</h2>
             <ul class="space-y-4 sm:text-lg">
                 <li class="flex items-center justify-center gap-2">
                     <i class="fa-solid fa-envelope text-white"></i>
                     <a href="mailto:www.serophero_demo@gmail.com"
                         class="hover:underline">www.serophero_demo@gmail.com</a>
                 </li>
                 <li class="flex items-center justify-center gap-2">
                     <i class="fa-solid fa-phone text-white"></i>
                     <span>+977-9812345678</span>
                 </li>
                 <li class="flex items-center justify-center gap-2">
                     <i class="fa-solid fa-location-dot text-white"></i>
                     <span>Dharan, Sunsari</span>
                 </li>
             </ul>
         </div>

         <!-- Social Media & Contact -->
         <div class="md:col-span-1 text-lg bg-[var(--primary)] py-6 rounded-lg px-4 shadow-lg">
             <h2 class="font-semibold text-center text-white mb-6">Follow Us</h2>
             <div class="space-y-4">
                 <div class="flex items-center justify-center gap-2">
                     <i class="fa-brands fa-instagram text-2xl text-white"></i>
                     <a href="#" class="hover:underline">Instagram</a>
                 </div>
                 <div class="flex items-center justify-center gap-2">
                     <i class="fa-brands fa-square-facebook text-2xl text-white"></i>
                     <a href="#" class="hover:underline">Facebook</a>
                 </div>
                 <div class="flex items-center justify-center gap-2">
                     <i class="fa-brands fa-youtube text-2xl text-white"></i>
                     <a href="#" class="hover:underline">YouTube</a>
                 </div>
             </div>
         </div>
     </div>
     <div class="border-t-[1px] border-gray-300 bg-[var(--primary)] text-white mt-8 pt-4 text-center text-sm">
         <p>© {{ date('Y') }} Serofero News Portal. All rights reserved.</p>
     </div>
 </section>

