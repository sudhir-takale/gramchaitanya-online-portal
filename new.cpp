#include <iostream>
#include <vector>
using namespace std;

void number(char  int &count)
{
    int count = 0;
    vector<char> v = {'A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u'};

    for (int i = 0; i < v.size(); i++)
    {
        for (int j = 0; j < p.size(); i++)
        {

            if (v[i] == p[j])
                continue;
            else
                count++;
        }
    }
}

int main()
{

    vector<char> a;
    for (int i = 0; i < 26; i++)
    {
        a[i] = 'A' + i;
    }

    // Adding lowercase alphabets
    for (int i = 26; i < 52; i++)
    {
        a[i] = 'a' + (i - 26);
    }

    int count = 0;
    string ans = "abcdf";

    for (int i = 0; i < ans.length(); i++)
    {

        char in = ans[i];
        number(in, count);
    }

    return 0;
}