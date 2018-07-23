from selenium import webdriver
import time
from selenium.webdriver.chrome.options import Options

options = Options()
options.add_argument("--start-maximized")
driver=webdriver.Chrome(chrome_options=options)
driver.get("http://localhost/irctc/img/login.html")
user=driver.find_element_by_name("username")
password=driver.find_element_by_name("password")
windows=driver.current_window_handle

user.send_keys("sachin")
password.send_keys("sachin97")
ele=driver.find_element_by_tag_name("button")
ele.click()
time.sleep(3)
driver.switch_to.alert.accept()


time.sleep(10)

driver.switch_to.window(windows)
user=driver.find_element_by_name("username")
password=driver.find_element_by_name("password")
user.send_keys("sachin1")
password.send_keys("")
ele=driver.find_element_by_tag_name("button")
time.sleep(2)
ele.click()

time.sleep(3)

user.clear()
user.send_keys("")
password.send_keys("sachin97")
ele=driver.find_element_by_tag_name("button")
time.sleep(2)
ele.click()


time.sleep(3)

password.clear()
user.send_keys("sachi97")
password.send_keys("sac567")
ele=driver.find_element_by_tag_name("button")
time.sleep(2)
ele.click()
time.sleep(3)


url=driver.current_url
print(url)

driver.get(url)
ele=driver.find_element_by_id("hv")
time.sleep(2)
ele.click()

url=driver.current_url
print(url)

driver.get(url)
ele=driver.find_element_by_xpath("/html/body/div[2]/fieldset[2]/div[1]/div/a[1]/button")
time.sleep(3)
ele.click()

url=driver.current_url
print(url)

driver.get(url)
windows=driver.current_window_handle
Name=driver.find_element_by_xpath("/html/body/form/div[1]/input")
Name.send_keys("Sachin")
username=driver.find_element_by_xpath("/html/body/form/div[2]/input")
time.sleep(2)
username.send_keys("sachi97")
email=driver.find_element_by_xpath("/html/body/form/div[3]/input")
time.sleep(2)
email.send_keys("abc@gmail.com")
password=driver.find_element_by_xpath("/html/body/form/div[4]/input")
time.sleep(2)
password.send_keys("Sachin")
cpass=driver.find_element_by_xpath("/html/body/form/div[5]/input")
time.sleep(2)
cpass.send_keys("Sachin")

reg=driver.find_element_by_xpath("/html/body/form/button")
time.sleep(2)
reg.click()

time.sleep(3)
driver.switch_to.alert.accept()

time.sleep(5)
driver.switch_to.window(windows)

Name=driver.find_element_by_xpath("/html/body/form/div[1]/input")
Name.send_keys("Sachin")
username=driver.find_element_by_xpath("/html/body/form/div[2]/input")
time.sleep(2)
username.send_keys("sachi98")
email=driver.find_element_by_xpath("/html/body/form/div[3]/input")
time.sleep(2)
email.send_keys("abc@gmail.com")
password=driver.find_element_by_xpath("/html/body/form/div[4]/input")
time.sleep(2)
password.send_keys("Sachin")
cpass=driver.find_element_by_xpath("/html/body/form/div[5]/input")
time.sleep(2)
cpass.send_keys("abcd")

reg=driver.find_element_by_xpath("/html/body/form/button")
time.sleep(2)
reg.click()


time.sleep(3)
driver.switch_to.alert.accept()

time.sleep(5)
driver.switch_to.window(windows)

Name=driver.find_element_by_xpath("/html/body/form/div[1]/input")
Name.send_keys("Sachin")
username=driver.find_element_by_xpath("/html/body/form/div[2]/input")
time.sleep(2)
username.send_keys("sachi98")
email=driver.find_element_by_xpath("/html/body/form/div[3]/input")
time.sleep(2)
email.send_keys("abc@gmail.com")
password=driver.find_element_by_xpath("/html/body/form/div[4]/input")
time.sleep(2)
password.send_keys("Sachin")
cpass=driver.find_element_by_xpath("/html/body/form/div[5]/input")
time.sleep(2)
cpass.send_keys("Sachin")

reg=driver.find_element_by_xpath("/html/body/form/button")
time.sleep(2)
reg.click()

time.sleep(2)
url=driver.current_url
print(url)

driver.get(url)
ele=driver.find_element_by_id("hv")
time.sleep(2)
ele.click()

