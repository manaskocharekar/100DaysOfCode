import sys
import tweepy
from tweepy import api

__author__ = '@ManasKocharekar'


#KEYS
<<<<<<< HEAD
CUST_KEY = 'i57HhXiPrwdZFdOcJHagTyXyc'
CUST_SECRET = 'twEUItfWsObrnWQ1F8TMBg31wRkERFjJr6U17hAi4hjMpQgNjg'
APP_KEY = '348995503-BbCiMNykdh1E0Nm0UW0ndM1YpZ02rpwjBSlikHUG'
APP_SECRET = 'YHDGl3ex6Nd7eeVRNlYgtMEcKeZf1n7efwrEOgBRkLHbu'
auth = tweepy.OAuthHandler(CUST_KEY, CUST_SECRET)
auth.set_access_token(APP_KEY, APP_SECRET)
=======
CUST_KEY = ''
CUST_SECRET = ''
APP_KEY = ''
APP_SECRET = ''
auth = tweepy.OAuthHandler(CUST_KEY, CUST_SECRET) //Enter your respective Keys
auth.set_access_token(APP_KEY, APP_SECRET)  //Enter your respective Keys
>>>>>>> 05f84aba0d543c0ac9416c1105e72ed3129fb2d4
access = tweepy.API(auth)

TweetThis = str(sys.argv[1])

if TweetThis.startswith("#"):
    TweetText = TweetThis[1:]
else:
    filename = open(TweetThis, 'r')
    TweetText = filename.read()
    filename.close()

print(TweetText)

if len(TweetText) <= 140:
    access.update_status(TweetText)
    print('Tweeted Successfully')
else:
    print('Tweet Length Exceeded')
