<template>
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
          <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 active">
                <span class="ml-3">Dashboard</span>
              </a>
          </li>
          <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <span class="flex-1 ml-3 whitespace-nowrap">Clients</span>
              </a>
          </li>
          <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <span class="flex-1 ml-3 whitespace-nowrap">Projects</span>
              </a>
          </li>
          <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <span class="flex-1 ml-3 whitespace-nowrap">Tasks</span>
              </a>
          </li>
        </ul>
        <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200">
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group">
               <span class="ml-4">Logout</span>
            </a>
         </li>
      </ul>
    </div>
  </aside>
</template>