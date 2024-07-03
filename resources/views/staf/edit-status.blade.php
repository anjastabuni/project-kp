<x-layout>
    <div class="py-12">
        <h2 class="text-2xl font-bold">Update Status Proposal</h2>
        <form action="" method="post">
        <div class="mt-8 max-w-md">
          <div class="grid grid-cols-1 gap-6">
            <label class="block">
                <span class="text-gray-700">Status</span>
                <select
                  class="block w-full mt-1 py-2 px-2 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                >
                  <option class="py-2 px-2">Accepted</option>
                  <option class="py-2 px-2">In Progress</option>
                </select>
              </label>
              <label class="block">
                <span class="text-gray-700">Additional details</span>
                <textarea
                  class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                  rows="3"
                ></textarea>
              </label>
           
          </div>
          <button type="submit" class="mt-5 w-full rounded-md bg-green-500 text-white px-2 py-2 hover:bg-green-700">Perbaruhi</button>
        </div>
        
        </form>
    </div>
</x-layout>