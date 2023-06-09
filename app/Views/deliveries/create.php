
<div id="create-delivery-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="create-delivery-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Krijo Dergese</h3>
                    <form class="max-w-lg mx-auto" action="/deliveries/create" method="POST">
                      <div class="mt-4">
                          <div class="flex justify-between">
                              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Emaili i Marresit</label>
                          </div>
                          <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="recipient_email" name="recipient_email" type="email" placeholder="filan.fisteku@shembull.al" required>
                      </div>
                      <div class="mt-4">
                          <div class="flex justify-between">
                              <div class="w-1/2 mr-1">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                  <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" id="recipient_first_name" name="recipient_first_name" placeholder="Filan" required>
                              </div>
                              <div class="w-1/2 ml-1">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                  <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" id="recipient_last_name" name="recipient_last_name" placeholder="Fisteku" required>
                              </div>
                          </div>
                      </div>
                      <div class="mt-4 flex items-center justify-between">
                          <span class="border-b w-full"></span>
                      </div>
                      <div class="mt-4">
                          <div class="flex justify-between">
                              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresa</label>
                          </div>
                          <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="recipient_address_street" name="recipient_address_street" type="text" placeholder="Rr. Sami Frasheri, Nd. 15, H. 1, Ap. 12" required>
                      </div>

                      <div class="mt-4">
                          <div class="flex justify-between">
                              <div class="w-1/2 mr-1">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qyteti</label>
                                  <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="recipient_address_city" name="recipient_address_city" required>
                                      <option value="" disabled selected>Zgjidh Qytetin</option>
                                      <option value="Tirana">Tirana</option>
                                      <option value="Durres">Durres</option>
                                      <option value="Vlore">Vlore</option>
                                      <option value="Kamez">Kamez</option>
                                      <option value="Fier">Fier</option>
                                      <option value="Shkoder">Shkoder</option>
                                      <option value="Elbasan">Elbasan</option>
                                      <option value="Korçe">Korçe</option>
                                      <option value="Sarande">Sarande</option>
                                      <option value="Berat">Berat</option>
                                      <option value="Lushnje">Lushnje</option>
                                      <option value="Kavaje">Kavaje</option>
                                      <option value="Gjirokaster">Gjirokaster</option>
                                      <option value="Pogradec">Pogradec</option>
                                      <option value="Fushe-Kruje">Fushe-Kruje</option>
                                      <option value="Laç">Laç</option>
                                      <option value="Kukes">Kukes</option>
                                      <option value="Sukth">Sukth</option>
                                      <option value="Lezhe">Lezhe</option>
                                      <option value="Patos">Patos</option>
                                      <option value="Peshkopi">Peshkopi</option>
                                      <option value="Librazhd-Qender">Librazhd-Qender</option>
                                      <option value="Kuçove">Kuçove</option>
                                      <option value="Kruje">Kruje</option>
                                      <option value="Vore">Vore</option>
                                      <option value="Burrel">Burrel</option>
                                      <option value="Libonik">Libonik</option>
                                      <option value="Rreshen">Rreshen</option>
                                      <option value="Belsh">Belsh</option>
                                      <option value="Divjake">Divjake</option>
                                      <option value="Gramsh">Gramsh</option>
                                      <option value="Mamurras">Mamurras</option>
                                      <option value="Bulqize">Bulqize</option>
                                      <option value="Vau i Dejes">Vau i Dejes</option>
                                      <option value="Shengjin">Shengjin</option>
                                      <option value="Ballsh">Ballsh</option>
                                      <option value="Shijak">Shijak</option>
                                      <option value="Bilisht">Bilisht</option>
                                      <option value="Rrogozhine">Rrogozhine</option>
                                      <option value="Librazhd">Librazhd</option>
                                      <option value="Cerrik">Cerrik</option>
                                      <option value="Roskovec">Roskovec</option>
                                      <option value="Peqin">Peqin</option>
                                      <option value="Krume">Krume</option>
                                      <option value="Permet">Permet</option>
                                      <option value="Prrenjas">Prrenjas</option>
                                      <option value="Delvine">Delvine</option>
                                      <option value="Bajram Curri">Bajram Curri</option>
                                      <option value="Dimal">Dimal</option>
                                      <option value="Rubik">Rubik</option>
                                      <option value="Tepelene">Tepelene</option>
                                      <option value="Poliçan">Poliçan</option>
                                      <option value="Maliq">Maliq</option>
                                      <option value="Çorovode">Çorovode</option>
                                      <option value="Erseke">Erseke</option>
                                      <option value="Koplik">Koplik</option>
                                      <option value="Puke">Puke</option>
                                      <option value="Lazarat">Lazarat</option>
                                      <option value="Memaliaj">Memaliaj</option>
                                  </select>
                              </div>
                              <div class="w-1/2 ml-1">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kodi Postar</label>
                                  <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" type="number" id="recipient_address_zip_code" name="recipient_address_zip_code" placeholder="1003" required>
                              </div>
                          </div>
                      </div>

                      <div class="mt-4">
                          <div class="flex justify-between">
                              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shenime</label>
                          </div>
                          <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="notes" name="notes" placeholder="Shenime"></textarea>
                      </div>
                      <div class="mt-8">
                          <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-800 dark:hover:bg-gray-900 dark:focus:ring-gray-900">Dergo</button>
                      </div>
                    </form>
                </div>
        </div>
    </div>
</div>

<script>
    // when the user types into the email field event
    document.getElementById('recipient_email').addEventListener('input', function(evt) {
        // get the email field value
        var email = evt.target.value;
        console.log(email);
        
        // send a request to get the user's name
        fetch('/auth/identity/?email=' + email)
            .then(response => response.json())
            .then(data => {
                // if the user was found
                if (data.found) {
                    console.log(data);
                    console.log(data.address.zip);
                    document.getElementById('recipient_first_name').value = data.first_name;
                    document.getElementById('recipient_last_name').value = data.last_name;

                    document.getElementById('recipient_address_street').value = data.address.street;
                    var city = document.getElementById('recipient_address_city');
                    for (var i = 0; i < city.options.length; i++) {
                        if (city.options[i].value == data.address.city) {
                            city.selectedIndex = i;
                            break;
                        }
                    }
                    document.getElementById('recipient_address_zip_code').value = data.address.zip;

                    // set fields as readonly
                    document.getElementById('recipient_first_name').readOnly = true;
                    document.getElementById('recipient_last_name').readOnly = true;

                    document.getElementById('recipient_address_street').readOnly = true;
                    document.getElementById('recipient_address_city').readOnly = true;
                    document.getElementById('recipient_address_zip_code').readOnly = true;
                } else {
                    document.getElementById('recipient_first_name').readOnly = false;
                    document.getElementById('recipient_last_name').readOnly = false;

                    document.getElementById('recipient_address_street').readOnly = false;
                    document.getElementById('recipient_address_city').readOnly = false;
                    document.getElementById('recipient_address_zip_code').readOnly = false;

                    document.getElementById('recipient_first_name').value = "";
                    document.getElementById('recipient_last_name').value = "";

                    document.getElementById('recipient_address_street').value = "";
                    document.getElementById('recipient_address_city').value = "";
                    document.getElementById('recipient_address_zip_code').value = "";
                }
            });
    });

</script>